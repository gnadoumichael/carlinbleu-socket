
const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const jwt = require("jsonwebtoken");

const app = express();
app.use(express.json());

const server = http.createServer(app);

const io = new Server(server, {
  cors: {
    origin: "*",
    methods: ["GET", "POST"]
  }
});

const JWT_SECRET = process.env.JWT_SECRET;
const SOCKET_SECRET = process.env.SOCKET_SECRET;

// Événements autorisés
const ALLOWED_EVENTS = [
  // Clients
  "client_ajoute",
  "client_modifie",
  "client_supprime",

  // Chantiers
  "chantier_ajoute",
  "chantier_modifie",
  "chantier_supprime",

  // Devis
  "devis_ajoute",
  "devis_modifie",
  "devis_supprime",

  // Fournisseurs
  "fournisseur_ajoute",
  "fournisseur_modifie",
  "fournisseur_supprime",

  // Personnel
  "personnel_ajoute",
  "personnel_modifie",
  "personnel_supprime",

  // Dépenses
  "depense_ajoute",
  "depense_modifie",
  "depense_supprime",

  // Règlements
  "reglement_ajoute",
  "reglement_modifie",
  "reglement_supprime"
];

// Authentification Socket.IO
io.use((socket, next) => {
  try {
    const token = socket.handshake.auth?.token;

    if (!token) {
      return next(new Error("Token manquant"));
    }

    const decoded = jwt.verify(token, JWT_SECRET);

    // Ces informations proviennent du JWT signé par Symfony
    const masterId = decoded.id_master;

    if (!masterId) {
      return next(new Error("Master non autorisé"));
    }

    socket.data.userId = decoded.id;
    socket.data.masterId = String(masterId);

    next();
  } catch (error) {
    next(new Error("Authentification invalide"));
  }
});

// Connexion et attribution automatique à la salle master
io.on("connection", (socket) => {
  const room = `master_${socket.data.masterId}`;

  socket.join(room);

  console.log("--------------------------------");
  console.log("SOCKET CONNECTÉ");
  console.log("USER ID :", socket.data.userId);
  console.log("MASTER ID :", socket.data.masterId);
  console.log("ROOM :", room);
  console.log("--------------------------------");

  socket.emit("connexion_ok", {
    userId: socket.data.userId,
    masterId: socket.data.masterId
  });

  socket.on("disconnect", () => {
    console.log(
      `Utilisateur ${socket.data.userId} déconnecté`
    );
  });
});

// Réception des notifications envoyées par Symfony
app.post("/emit", (req, res) => {
  const secret = req.headers["x-socket-secret"];

  if (!SOCKET_SECRET || secret !== SOCKET_SECRET) {
    return res.status(401).json({
      success: false,
      message: "Non autorisé"
    });
  }

  const { masterId, event, data } = req.body;

  if (!masterId || !ALLOWED_EVENTS.includes(event)) {
    return res.status(400).json({
      success: false,
      message: "Paramètres invalides"
    });
  }

  io.to(`master_${String(masterId)}`).emit(event, data);

  return res.json({
    success: true,
    event: event,
    masterId: String(masterId)
  });
});

app.get("/", (req, res) => {
  res.send("Carlinbleu Socket.IO opérationnel");
});

const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
  console.log(`Socket.IO démarré sur le port ${PORT}`);
});
