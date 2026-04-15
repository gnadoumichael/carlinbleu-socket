import {io} from "socket.io-client";

const socket = io("http://localhost:3001");

socket.on("connect", () => {
    console.log("🔥 Socket connecté :", socket.id);
});

socket.on("client_updated", (data) => {
    console.log("📡 Event reçu :", data);
});



