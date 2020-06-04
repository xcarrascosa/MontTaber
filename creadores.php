<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, maximum-scale=1">
    <title>Rincón de creadores - Mont Tàber Edicions</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168418476-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168418476-1');
    </script>

</head>

<body>

    <?php include("headernav.html") ?>

    <main>

        <article id="destacado">
            <h2>Rincón de creadores</h2>
            <div class="contenedor">
                <div class="articulo">
                    <p>¿Tienes prototipos guardados en el cajón? ¿Dibujas? ¿Traduces?</p>
                    <p>Si tienes alguna propuesta o algún trabajo que quieras mostrarnos estaremos encantados de
                        valorarlo para futuras colaboraciones.</p>
                    <p>Nos interesan los juegos de estilo eurogame con formato reducido, preferentemente de temática
                        histórica, artística o literaria.</p>
                </div>
                <div class="articulo">
                    <p>También, si tienes un medio de comunicación o perteneces a un club y quieres que participemos en
                        algún evento lúdico, ponte en contacto con nosotros para ver la manera en que podemos colaborar.
                    </p>
                    <p>Puedes ponerte en contacto con nosotros a través de nuestras redes sociales o escribiendo tu
                        mensaje en el <a href="contacto.php">formulario de contacto</a></p>
                </div>
            </div>
        </article>

        <aside id="info">
            <h3>Filosofía</h3>
            <div class="contenedor">
                <div class="filosofia">
                    <img src="img/filo-vision.jpg" alt="Nuestra visión">
                    <a href="vision.php">
                        <h4>Visión</h4>
                    </a>
                </div>
                <div class="filosofia">
                    <img src="img/filo-compromiso.jpg" alt="Nuestro compromiso">
                    <a href="compromiso.php">
                        <h4>Compromiso</h4>
                    </a>
                </div>
                <div class="filosofia">
                    <img src="img/filo-nosotros.jpg" alt="Sobre nosotros">
                    <a href="nosotros.php">
                        <h4>Nosotros</h4>
                    </a>
                </div>
                <div class="filosofia">
                    <img src="img/filo-creadores.jpg" alt="Rincón de creadores">
                    <a href="creadores.php">
                        <h4>Creadores</h4>
                    </a>
                </div>
            </div>
        </aside>

    </main>

    <?php include("footer.html") ?>

</body>

</html>