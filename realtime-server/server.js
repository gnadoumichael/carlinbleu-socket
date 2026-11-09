
const fs = require("fs");
const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const jwt = require("jsonwebtoken");

const app = express();
app.use(express.json({ limit: "1mb" }));

const server = http.createServer(app);

const io = new Server(server, {
  cors: {
    origin: "*",
    methods: ["GET", "POST"]
  }
});

// ========================================
// CONFIGURATION
// ========================================

const SOCKET_SECRET = process.env.SOCKET_SECRET;
const JWT_PUBLIC_KEY_PATH =
  process.env.JWT_PUBLIC_KEY_PATH || "/etc/secrets/jwt_public.pem";

if (!SOCKET_SECRET) {
  throw new Error("SOCKET_SECRET manquant dans les variables Render");
}

if (!fs.existsSync(JWT_PUBLIC_KEY_PATH)) {
  throw new Error(
    `Clé publique JWT introuvable : ${JWT_PUBLIC_KEY_PATH}`
  );
}

const JWT_PUBLIC_KEY = fs.readFileSync(
  JWT_PUBLIC_KEY_PATH,
  "utf8"
);

if (!JWT_PUBLIC_KEY.includes("BEGIN PUBLIC KEY")) {
  throw new Error("Le fichier JWT public.pem ne semble pas être une clé publique PEM valide");
}

console.log("✅ Clé publique JWT chargée");
console.log("✅ Configuration Socket.IO prête");

// ========================================
// ÉVÉNEMENTS AUTORISÉS
// ========================================

const ALLOWED_EVENTS = [
  "client_ajoute",
  "client_modifie",
  "client_supprime",

  "chantier_ajoute",
  "chantier_modifie",
  "chantier_supprime",

  "devis_ajoute",
  "devis_modifie",
  "devis_supprime",

  "fournisseur_ajoute",
  "fournisseur_modifie",
  "fournisseur_supprime",

  "personnel_ajoute",
  "personnel_modifie",
  "personnel_supprime",

  "depense_ajoute",
  "depense_modifie",
  "depense_supprime",

  "reglement_ajoute",
  "reglement_modifie",
  "reglement_supprime"
];

// ========================================
// AUTHENTIFICATION SOCKET.IO
// ========================================

io.use((socket, next) => {
  try {
    const token = socket.handshake.auth?.token;

    if (!token || typeof token !== "string") {
      return next(new Error("Token manquant"));
    }

    const decoded = jwt.verify(token, JWT_PUBLIC_KEY, {
      algorithms: ["RS256"]
    });

    const userId = decoded.id;
    const masterId = decoded.id_master;

    if (
      userId === undefined ||
      userId === null ||
      masterId === undefined ||
      masterId === null ||
      String(masterId).trim() === ""
    ) {
      return next(new Error("Identifiants utilisateur ou master manquants"));
    }

    // Identité issue exclusivement du JWT signé par Symfony
    socket.data.userId = String(userId);
    socket.data.masterId = String(masterId);

    console.log("✅ AUTHENTIFICATION SOCKET VALIDÉE");
    console.log("USER ID :", socket.data.userId);
    console.log("MASTER ID :", socket.data.masterId);

    next();

  } catch (error) {
    console.error("❌ ERREUR JWT :", error.name, error.message);

    next(new Error("Authentification invalide"));
  }
});

// ========================================
// CONNEXION ET SALLE MASTER
// ========================================

io.on("connection", (socket) => {
  const room = `master_${socket.data.masterId}`;

  socket.join(room);

  console.log("================================");
  console.log("🔥 NOUVELLE CONNEXION SOCKET");
  console.log("SOCKET ID :", socket.id);
  console.log("USER ID :", socket.data.userId);
  console.log("MASTER ID :", socket.data.masterId);
  console.log("ROOM :", room);
  console.log("SALLES :", [...socket.rooms]);
  console.log("================================");

  socket.emit("connexion_ok", {
    userId: socket.data.userId,
    masterId: socket.data.masterId
  });

  socket.on("disconnect", (reason) => {
    console.log(
      `🔌 Utilisateur ${socket.data.userId} déconnecté : ${reason}`
    );
  });
});

// ========================================
// ÉMISSION DES NOTIFICATIONS DEPUIS SYMFONY
// ========================================

app.post("/emit", (req, res) => {
  const secret = req.headers["x-socket-secret"];

  if (!secret || secret !== SOCKET_SECRET) {
    return res.status(401).json({
      success: false,
      message: "Non autorisé"
    });
  }

  const { masterId, event, data } = req.body;

  if (
    masterId === undefined ||
    masterId === null ||
    String(masterId).trim() === "" ||
    !ALLOWED_EVENTS.includes(event)
  ) {
    return res.status(400).json({
      success: false,
      message: "Paramètres invalides"
    });
  }

  const room = `master_${String(masterId)}`;

  io.to(room).emit(event, {
    ...(data && typeof data === "object" && !Array.isArray(data)
      ? data
      : { value: data }),
    masterId: String(masterId)
  });

  console.log("📡 ÉVÉNEMENT ÉMIS :", event);
  console.log("🏢 MASTER :", masterId);
  console.log("🏠 ROOM :", room);

  return res.json({
    success: true,
    event,
    masterId: String(masterId)
  });
});

// ========================================
// ROUTE DE TEST
// ========================================

app.get("/", (req, res) => {
  res.status(200).send("Carlinbleu Socket.IO opérationnel");
});

// ========================================
// DÉMARRAGE
// ========================================

const PORT = process.env.PORT || 3000;

server.listen(PORT, "0.0.0.0", () => {
  console.log(`🚀 Socket.IO démarré sur le port ${PORT}`);
});
