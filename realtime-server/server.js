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
app.post('/emit/client_updated', (req, res) => {
  const auth = req.headers.authorization;

  if (auth !== `Bearer ${process.env.MON_SECRET}`) {
    return res.status(401).json({ error: 'Unauthorized' });
  }

  io.emit('client_updated', req.body);

  res.json({ success: true });
});

const PORT = process.env.PORT || 3000;

server.listen(PORT, () => {
    console.log("Socket.IO server running on port", PORT);
});
