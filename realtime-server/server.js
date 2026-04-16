const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");

const app = express();

// 🔒 CORS sécurisé (autorise seulement ton app)
app.use(cors({
    origin: ["https://carlinbleu.com"] // 🔥 à adapter
}));

app.use(express.json());

const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: ["https://carlinbleu.com"]
    }
});

// ✅ Route test
app.get("/", (req, res) => {
    res.send("🚀 Socket.IO server is running");
});

// 🔌 Connexion socket
io.on("connection", (socket) => {
    console.log("Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("Client déconnecté:", socket.id);
    });
});

// 🔐 Middleware sécurité
function checkAuth(req, res, next) {
    const auth = req.headers.authorization;

    if (!auth || auth !== `Bearer ${process.env.SOCKET_SECRET}`) {
        console.warn("⛔ Tentative non autorisée:", req.ip);
        return res.status(401).json({ error: 'Unauthorized' });
    }

    next();
}

// 🔍 Validation simple des données
function validateClient(data) {
    return data &&
        typeof data.id !== "undefined" &&
        typeof data.nomclient === "string";
}

// 🚀 Endpoint sécurisé
app.post('/emit/client_updated', checkAuth, (req, res) => {

    if (!validateClient(req.body)) {
        return res.status(400).json({ error: "Invalid data" });
    }

    console.log("✅ Event envoyé:", req.body.id);

    io.emit('client_updated', req.body);

    res.json({ success: true });
});

const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("Socket.IO server running on port", PORT);
});
