<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: rgb(174, 233, 228);
    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #575757;
    }

    nav a.active {
      background-color: #04AA6D;
    }

    footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 10px;
    position: relative;
    bottom: 0;
    width: 100%;
  }

  footer a {
    color: #04AA6D;
    text-decoration: none;
    margin: 0 5px;
  }

  footer a:hover {
    text-decoration: underline;
  }

  header {
    text-align: center;
    font-size: 30px;
  }

  .video {
    max-width: 1500px;       /* Limita el ancho del texto */
    margin: 0 auto;         /* Centra horizontalmente */
    text-align: center;
  }
  </style>
</head>
<body>
    <nav>
        <a href="/" class="active">Inicio</a>
        <a href="/historia">Historia</a>
        <a href="/galeria">Galeria</a>
        <a href="/musicas">Mejores Musicas</a>
        <a href="/videos">Mejores Videos</a>
        <a href="/about">Acerca de</a>
    </nav>

    <header>
        <h1>LOS VIDEOS CON MAS VISITAS DE YOUTUBE</h1>
    </header>

    <main class="video">
        
    </main>

    <footer>
        <p>&copy; 2025 Tu Empresa. Todos los derechos reservados.</p>
        <p>
            <a href="privacidad.html">Política de Privacidad</a> | 
            <a href="terminos.html">Términos y Condiciones</a>
        </p>
    </footer>
</body>
</html>