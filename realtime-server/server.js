
const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");
const axios = require("axios");

const app = express();
const server = http.createServer(app);

// ==========================================
// CONFIGURATION
// ==========================================

const PORT = process.env.PORT || 3000;
const SOCKET_SECRET = process.env.SOCKET_SECRET;
const AUTH_VALIDATE_URL = process.env.AUTH_VALIDATE_URL;

// Domaines autorisés, séparés par des virgules
const allowedOrigins = (
    process.env.ALLOWED_ORIGINS ||
    "https://carlinbleu.com"
).split(",").map(origin => origin.trim()).filter(Boolean);

app.use(express.json({ limit: "100kb" }));

// Autorisation CORS
const corsOptions = {
    origin: (origin, callback) => {
        // Les applications natives Flutter peuvent ne pas envoyer Origin.
        if (!origin || allowedOrigins.includes(origin)) {
            return callback(null, true);
        }

        return callback(new Error("Origin non autorisée"));
    },
    methods: ["GET", "POST"],
    credentials: true
};

app.use(cors(corsOptions));

// ==========================================
// SOCKET.IO
// ==========================================

const io = new Server(server, {
    cors: corsOptions,
    transports: ["websocket", "polling"],
    pingInterval: 25000,
    pingTimeout: 20000
});

// ==========================================
// ÉVÉNEMENTS AUTORISÉS
// ==========================================

const allowedEvents = [
    // CLIENTS
    "client_add",
    "client_updated",
    "client_deleted",

    // CHANTIERS
    "chantier_add",
    "chantier_updated",
    "chantier_deleted",

    // SERVICES
    "service_add",
    "service_updated",
    "service_deleted",

    // PERSONNEL
    "personnel_add",
    "personnel_updated",
    "personnel_deleted",

    // FOURNISSEURS
    "fournisseur_add",
    "fournisseur_updated",
    "fournisseur_deleted",

    // PRESTATAIRES
    "prestataire_add",
    "prestataire_updated",
    "prestataire_deleted",

    // DEVIS
    "devis_add",
    "devis_updated",
    "devis_deleted",

    // MATÉRIAUX
    "materiau_add",
    "materiau_updated",
    "materiau_deleted",

    // TÂCHES
    "tache_add",
    "tache_updated",
    "tache_deleted"
];

// ==========================================
// VÉRIFICATION DES DONNÉES
// ==========================================

function isValidCompanyId(id) {
    return (
        (typeof id === "number" || typeof id === "string") &&
        /^\d+$/.test(String(id)) &&
        Number(id) > 0
    );
}

// ==========================================
// AUTHENTIFICATION DES UTILISATEURS FLUTTER
// ==========================================

// Le token est vérifié par Symfony.
// Symfony doit déterminer lui-même le compte principal.
// Flutter ne peut pas choisir son companyId.

io.use(async (socket, next) => {
    try {
        const token = socket.handshake.auth?.token;

        if (!token) {
            return next(new Error("Authentification requise"));
        }

        if (!AUTH_VALIDATE_URL) {
            return next(new Error("Configuration d'authentification absente"));
        }

        const response = await axios.get(AUTH_VALIDATE_URL, {
            headers: {
                Authorization: `Bearer ${token}`
            },
            timeout: 5000
        });

        const companyId = response.data?.companyId;

        if (
            response.data?.valid !== true ||
            !isValidCompanyId(companyId)
        ) {
            return next(new Error("Utilisateur non autorisé"));
        }

        socket.data.companyId = String(companyId);

        next();

    } catch (error) {
        console.error(
            "Erreur authentification Socket:",
            error.message
        );

        next(new Error("Authentification impossible"));
    }
});

// ==========================================
// CONNEXION SOCKET
// ==========================================

io.on("connection", (socket) => {

    const companyId = socket.data.companyId;
    const room = `company_${companyId}`;

    // Inscription automatique dans la salle de l'entreprise
    socket.join(room);

    console.log(
        `🟢 Connecté: ${socket.id} | Entreprise: ${companyId}`
    );

    socket.on("disconnect", (reason) => {
        console.log(
            `🔴 Déconnecté: ${socket.id} | ${reason}`
        );
    });

});

// ==========================================
// PAGE TEST
// ==========================================

app.get("/", (req, res) => {
    res.json({
        success: true,
        message: "Carlinbleu Socket.IO opérationnel",
        connectedUsers: io.engine.clientsCount
    });
});

// ==========================================
// AUTHENTIFICATION SYMFONY
// ==========================================

function checkAuth(req, res, next) {

    const auth = req.headers.authorization;

    if (!SOCKET_SECRET) {
        return res.status(500).json({
            error: "SOCKET_SECRET non configuré"
        });
    }

    if (!auth || !auth.startsWith("Bearer ")) {
        return res.status(401).json({
            error: "Token manquant"
        });
    }

    const token = auth.substring(7);

    if (token !== SOCKET_SECRET) {
        return res.status(403).json({
            error: "Accès interdit"
        });
    }

    next();
}

// ==========================================
// DIFFUSION DES ÉVÉNEMENTS
// ==========================================

app.post("/emit", checkAuth, (req, res) => {

    const { event, companyId, data } = req.body;

    // Vérification événement
    if (!allowedEvents.includes(event)) {
        return res.status(400).json({
            error: "Événement non autorisé"
        });
    }

    // Vérification entreprise
    if (!isValidCompanyId(companyId)) {
        return res.status(400).json({
            error: "Identifiant entreprise invalide"
        });
    }

    // Vérification données
    if (
        !data ||
        typeof data !== "object" ||
        Array.isArray(data) ||
        !isValidCompanyId(data.id)
    ) {
        return res.status(400).json({
            error: "Données invalides"
        });
    }

    const room = `company_${companyId}`;

    const payload = {
        ...data,
        companyId: String(companyId),
        serverTime: new Date().toISOString()
    };

    // Diffusion uniquement aux utilisateurs de cette entreprise
    io.to(room).emit(event, payload);

    console.log(
        `📡 ${event} | Entreprise ${companyId} | ID ${data.id}`
    );

    return res.json({
        success: true,
        event,
        companyId: String(companyId)
    });

});

// ==========================================
// GESTION DES ERREURS
// ==========================================

app.use((err, req, res, next) => {
    console.error("Erreur serveur:", err.message);

    if (res.headersSent) {
        return next(err);
    }

    res.status(500).json({
        error: "Erreur interne du serveur"
    });
});

// ==========================================
// DÉMARRAGE
// ==========================================

server.listen(PORT, () => {
    console.log("================================");
    console.log("🚀 CARLINBLEU SOCKET.IO");
    console.log("Port:", PORT);
    console.log("================================");
});
