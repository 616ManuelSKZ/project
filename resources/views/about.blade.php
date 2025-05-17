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

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    h1 {
         text-align: center;
         color: #00796b;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        text-align: justify;
    }

    .foto {
        text-align: center;
        margin-bottom: 20px;
        }

    .foto img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
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
        <h1>ACERCA DE MÍ</h1>
    </header>

    <main>
        <div class="container">
            <div class="foto">
                <img src="../img/10.png" alt="Foto del creador">
            </div>
            <p>
                ¡Hola! Mi nombre es Manuel, soy el creador de este sitio web. Soy un apasionado del desarrollo web, la música y el diseño creativo. Este proyecto lo desarrollé con el objetivo de compartir información interesante y entretenida sobre artistas que han dejado huella en la historia de la música.
            </p>
            <p>
                Actualmente estudio desarrollo de software y disfruto aprender constantemente nuevas tecnologías. Me encanta crear páginas web, experimentar con diseños responsivos y ofrecer experiencias visuales atractivas para los visitantes. Este sitio es una muestra de mi entusiasmo por la web y el arte.
            </p>
            <p>
                ¡Gracias por visitar este sitio! Si quieres contactarme o saber más sobre mi trabajo, puedes hacerlo a través del formulario de contacto o mis redes sociales.
            </p>
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