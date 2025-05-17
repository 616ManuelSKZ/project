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

  .contenedor {
      display: flex;
      align-items: flex-start;
      max-width: 1500px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .imagen-artista {
      width: 500px;
      margin-right: 30px;
    }

    .imagen-artista img {
      width: 480px;
      border-radius: 10px;
      height: 380px;
    }

    .lista-canciones {
      flex: 1;
    }

    .lista-canciones h2 {
      margin-top: 0;
      font-size: 28px;
      color: #333;
    }

    .lista-canciones ol {
      font-size: 28px;
      color: #444;
      padding-left: 20px;
    }

    header {
    text-align: center;
    font-size: 30px;
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
        <h1>LAS MEJORES CANCIONES DE MICHAEL JACKSON</h1>
    </header>

    <main>
        <div class="contenedor">
            <div class="imagen-artista">
                <img src="../img/1.jpg" alt="Michael Jackson">
            </div>
            <div class="lista-canciones">
            <ol>
                <li>Billie Jean</li>
                <li>Thriller</li>
                <li>Beat It</li>
                <li>Man in the Mirror</li>
                <li>Black or White</li>
                <li>Don't Stop 'Til You Get Enough</li>
                <li>Heal the World</li>
                <li>Remember the Time</li>
                <li>The Way You Make Me Feel</li>
                <li>Earth Song</li>
            </ol>
            </div>
        </div>
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