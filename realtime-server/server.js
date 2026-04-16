const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");
const crypto = require("crypto");

const app = express();

// 🔒 CONFIG
const PORT = process.env.PORT || 3000;
const SOCKET_SECRET = process.env.SOCKET_SECRET;

// ⚠️ sécurité minimale
if (!SOCKET_SECRET) {
    console.error("❌ SOCKET_SECRET manquant !");
    process.exit(1);
}

// 🔓 CORS (adapter selon ton cas)
app.use(cors({
    origin: ["https://carlinbleu.com", "http://localhost"]
}));

app.use(express.json());

// 🔥 SERVER HTTP + SOCKET
const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: ["https://carlinbleu.com", "http://localhost"]
    }
});

// =========================
// 🔐 UTILS SÉCURITÉ
// =========================

function safeCompare(a, b) {
    const buffA = Buffer.from(a);
    const buffB = Buffer.from(b);

    if (buffA.length !== buffB.length) return false;

    return crypto.timingSafeEqual(buffA, buffB);
}

// =========================
// 🔐 AUTH HTTP (SYMFONY → SOCKET)
// =========================

function checkAuth(req, res, next) {
    const auth = req.headers.authorization;

    if (!auth) {
        console.warn("⛔ No token:", req.ip);
        return res.status(401).json({ error: "No token" });
    }

    const token = auth.split(" ")[1];

    if (!token || !safeCompare(token, SOCKET_SECRET)) {
        console.warn("⛔ Invalid token:", req.ip);
        return res.status(403).json({ error: "Forbidden" });
    }

    next();
}

// =========================
// 🔐 AUTH SOCKET (CLIENTS)
// =========================

io.use((socket, next) => {
    const token = socket.handshake.auth?.token;

    if (!token || !safeCompare(token, SOCKET_SECRET)) {
        console.warn("⛔ Socket refusé:", socket.id);
        return next(new Error("Unauthorized"));
    }

    next();
});

// =========================
// 🔌 CONNEXION SOCKET
// =========================

io.on("connection", (socket) => {
    console.log("✅ Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("❌ Client déconnecté:", socket.id);
    });
});

// =========================
// 🔍 VALIDATION DATA
// =========================

function validateClient(data) {
    return data &&
        typeof data.id === "number" &&
        typeof data.nomclient === "string" &&
        typeof data.adresse === "string" &&
        typeof data.contact === "string";
}

// =========================
// 🚀 ENDPOINT EMIT
// =========================

app.post("/emit/client_updated", checkAuth, (req, res) => {

    const data = req.body;

    if (!validateClient(data)) {
        console.warn("⛔ Invalid payload:", data);
        return res.status(400).json({ error: "Invalid data" });
    }

    console.log("🚀 Emit client_updated:", data.id);

    // 🔥 Broadcast à tous les clients
    io.emit("client_updated", data);

    res.json({ success: true });
});

// =========================
// 🧪 TEST
// =========================

app.get("/", (req, res) => {
    res.send("🚀 Socket server OK");
});

// =========================
// ▶️ START
// =========================

server.listen(PORT, () => {
    console.log(`🚀 Server running on port ${PORT}`);
});
