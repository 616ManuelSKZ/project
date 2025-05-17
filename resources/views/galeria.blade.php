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

  .galeria {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .galeria img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }

    .galeria img:hover {
      transform: scale(1.05);
    }

    header {
    text-align: center;
    font-size: 50px;
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
        <h2>GALERIA DE IMAGENES</h2>
    </header>

    <main>
        <section class="galeria">
            <img src="../img/2.jpg" alt="Imagen 1">
            <img src="../img/3.jpg" alt="Imagen 2">
            <img src="../img/4.jpg" alt="Imagen 3">
            <img src="../img/5.jpg" alt="Imagen 4">
            <img src="../img/6.jpg" alt="Imagen 5">
            <img src="../img/7.jpg" alt="Imagen 6">
            <img src="../img/8.jpeg" alt="Imagen 7">
            <img src="../img/9.jpg" alt="Imagen 8">
        </section>
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