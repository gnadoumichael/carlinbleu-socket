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

// 🔐 SECRET
const SOCKET_SECRET = process.env.SOCKET_SECRET;

// =======================
// TEST ROUTES
// =======================
app.get("/", (req, res) => {
    res.send("🚀 Socket server OK");
});

// =======================
// AUTH MIDDLEWARE
// =======================
function checkAuth(req, res, next) {
    const auth = req.headers.authorization;

    if (!auth) {
        return res.status(401).json({ error: "No token" });
    }

    const token = auth.split(" ")[1];

    if (token !== SOCKET_SECRET) {
        return res.status(403).json({ error: "Forbidden" });
    }

    next();
}

// =======================
// SOCKET CONNECTION
// =======================
io.on("connection", (socket) => {
    console.log("🟢 Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("🔴 Client déconnecté:", socket.id);
    });
});

// =======================
// UTILITAIRE RESPONSE
// =======================
function safeEmit(event, payload) {
    io.emit(event, {
        ...payload,
        serverTime: new Date().toISOString()
    });
}

// =======================
// CLIENT ADD
// =======================
app.post("/emit/client_add", checkAuth, (req, res) => {
    const data = req.body;

    if (!data || !data.id) {
        return res.status(400).json({ error: "Invalid data" });
    }

    safeEmit("client_add", data);

    return res.json({ success: true });
});

// =======================
// CLIENT UPDATE
// =======================
app.post("/emit/client_updated", checkAuth, (req, res) => {
    const data = req.body;

    if (!data || !data.id) {
        return res.status(400).json({ error: "Invalid data" });
    }

    safeEmit("client_updated", data);

    return res.json({ success: true });
});

// =======================
// CLIENT DELETE
// =======================
app.post("/emit/client_deleted", checkAuth, (req, res) => {
    const data = req.body;

    if (!data || !data.id) {
        return res.status(400).json({ error: "Invalid data" });
    }

    safeEmit("client_deleted", { id: data.id });

    return res.json({ success: true });
});

// =======================
// START
// =======================
const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("🚀 Server running on port", PORT);
});
