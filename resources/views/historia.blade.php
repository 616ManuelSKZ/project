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
    font-size: 50px;
  }

  main h2{
    font-size: 50px;
  }

  main p {
    font-size: 30px;
  }

  .historiatxt {
    max-width: 1500px;       /* Limita el ancho del texto */
    margin: 0 auto;         /* Centra horizontalmente */
    text-align: center;     /* Centra el texto dentro del div */
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
        <h1>HISTORIA Y SU LEGADO:</h1>
    </header>

    <main>
        <div class="historiatxt">
            <h2 >Historia de Michael Jackson</h2>
            <p>
                <b>Michael Jackson</b>, conocido como el "Rey del Pop", fue uno de los artistas más influyentes y exitosos de todos los tiempos. Nació el <b>29 de agosto de 1958</b> en <b>Gary, Indiana, EE. UU.</b>, y desde muy joven mostró un talento excepcional para la música y la danza.<br>
            </p>
            <p>
                Su carrera comenzó a los cinco años como miembro del grupo <b>The Jackson 5</b>, junto a sus hermanos. La banda logró un gran éxito en la década de 1970 con temas como I Want You Back, ABC y I'll Be There. Sin embargo, fue su carrera como solista la que lo convirtió en una leyenda mundial.
            </p>
            <p>
                En 1982, lanzó <b>"Thriller"</b>, el álbum más vendido de la historia, que incluye éxitos como Beat It, Billie Jean y Thriller. Su estilo innovador combinó pop, soul, rock y funk, además de videoclips revolucionarios y coreografías icónicas, como el famoso <b>"moonwalk"</b>.
            </p>
            <p>
                A lo largo de su carrera, Jackson ganó numerosos premios, incluyendo <b>13 premios Grammy</b> y múltiples récords Guinness. Fue también un activista humanitario, apoyando causas sociales y contribuyendo con millones de dólares a organizaciones benéficas.
            </p>
            <p>
                A pesar de su éxito, su vida personal estuvo marcada por controversias y problemas de salud. Murió el <b>25 de junio de 2009</b>, a los 50 años, dejando un legado inmenso en la historia de la música.
            </p>
        </div>

        <hr>

        <div class="video">
            <h2>Video Acerca de la Historia de Michael Jackson</h2>
            <iframe width="960" height="615" src="https://www.youtube.com/embed/WuYwpgCoXrU?si=helxM8ekdyot3hvu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <br>
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