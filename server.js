// server.js
const http = require('http');
const fs = require('fs');
const path = require('path');

const server = http.createServer((req, res) => {
  let filePath = '.';
  if (req.url === '/') {
    filePath = path.join(__dirname, 'index.html');
  } else {
    filePath = path.join(__dirname, req.url);
  }

  // Leer el archivo
  fs.readFile(filePath, (err, content) => {
    if (err) {
      if (err.code === 'ENOENT') {
        // Archivo no encontrado
        res.writeHead(404);
        res.end('404 - Página no encontrada');
      } else {
        // Otro error del servidor
        res.writeHead(500);
        res.end('500 - Error interno del servidor');
      }
    } else {
      // Determinar tipo MIME según la extensión
      const extname = path.extname(filePath).toLowerCase();
      let contentType = 'text/html';
      switch (extname) {
        case '.js':
          contentType = 'text/javascript';
          break;
        case '.css':
          contentType = 'text/css';
          break;
        case '.json':
          contentType = 'application/json';
          break;
        case '.png':
          contentType = 'image/png';
          break;
        case '.jpg':
        case '.jpeg':
          contentType = 'image/jpeg';
          break;
        case '.woff':
        case '.woff2':
          contentType = 'font/woff2';
          break;
        case '.ico':
          contentType = 'image/x-icon';
          break;
      }

      res.writeHead(200, { 'Content-Type': contentType });
      res.end(content);
    }
  });
});

// Iniciar servidor en el puerto 3000
server.listen(3000, '127.0.0.1', () => {
  console.log('✅ Servidor corriendo en http://127.0.0.1:3000');
});
