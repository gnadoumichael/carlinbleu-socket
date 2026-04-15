const express = require("express");
const http = require("http");
const { Server } = require("socket.io");
const cors = require("cors");

const app = express();
app.use(cors());
app.use(express.json());

const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: "*"
    }
});

// ✅ Route de test (IMPORTANT pour Render)
app.get("/", (req, res) => {
    res.send("🚀 Socket.IO server is running");
});

// connexion socket
io.on("connection", (socket) => {
    console.log("Client connecté:", socket.id);

    socket.on("disconnect", () => {
        console.log("Client déconnecté");
    });
});

// endpoint Symfony
app.post("/emit/client_updated", (req, res) => {
    console.log("🔥 HTTP REÇU:", req.body);
    console.log("👥 clients connectés:", io.engine.clientsCount);

    io.emit("client_updated", req.body);

    res.json({ status: "ok" });
});

const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("Socket.IO server running on port", PORT);
});
