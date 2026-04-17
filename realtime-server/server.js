const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");

const app = express();
app.use(cors({
    origin: "https://carlinbleu.com"
}));
app.use(express.json());

const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: "https://carlinbleu.com"
    }
});

// 🔐 SECRET SIMPLE
const SOCKET_SECRET = process.env.SOCKET_SECRET;

// =======================
// TEST SERVER
// =======================
app.get("/", (req, res) => {
    res.send("🚀 Socket server OK");
});

app.get("/test", (req, res) => {
    console.log("HEADERS =", req.headers);
    res.json(req.headers);
});

// =======================
// AUTH SIMPLE
// =======================
const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");

const app = express();
app.use(cors({
    origin: "https://carlinbleu.com"
}));
app.use(express.json());

const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: "https://carlinbleu.com"
    }
});

// 🔐 SECRET SIMPLE
const SOCKET_SECRET = process.env.SOCKET_SECRET;

// =======================
// TEST SERVER
// =======================
app.get("/", (req, res) => {
    res.send("🚀 Socket server OK");
});

// =======================
// AUTH SIMPLE
// =======================
function checkAuth(req, res, next) {
    console.log("HEADERS =", req.headers);

    const auth = req.headers.authorization;

    if (!auth) {
        console.log("❌ PAS DE HEADER AUTH");
        return res.status(401).json({ error: "No token" });
    }

    const token = auth.split(" ")[1];

    console.log("TOKEN RECU =", token);
    console.log("SECRET =", process.env.SOCKET_SECRET);

    if (token !== process.env.SOCKET_SECRET) {
        console.log("❌ TOKEN INVALID");
        return res.status(403).json({ error: "Forbidden" });
    }

    console.log("✅ AUTH OK");
    next();
}

// =======================
// SOCKET CONNECTION
// =======================
io.on("connection", (socket) => {
    console.log("Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("Client déconnecté:", socket.id);
    });
});

// =======================
// EMIT CLIENT UPDATED
// =======================
app.post("/emit/client_updated", checkAuth, (req, res) => {
    const data = req.body;

    if (!data || !data.id) {
        return res.status(400).json({ error: "Invalid data" });
    }

    io.emit("client_updated", data);

    res.json({ success: true });
});

// =======================
// START
// =======================
const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("🚀 Server running on port", PORT);
});

// =======================
// SOCKET CONNECTION
// =======================
io.on("connection", (socket) => {
    console.log("Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("Client déconnecté:", socket.id);
    });
});

// =======================
// EMIT CLIENT UPDATED
// =======================
app.post("/emit/client_updated", checkAuth, (req, res) => {
    const data = req.body;

    if (!data || !data.id) {
        return res.status(400).json({ error: "Invalid data" });
    }

    io.emit("client_updated", data);

    res.json({ success: true });
});

// =======================
// START
// =======================
const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("🚀 Server running on port", PORT);
});
