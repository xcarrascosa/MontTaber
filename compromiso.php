<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, maximum-scale=1">
    <title>Nuestro compromiso - Mont Tàber Edicions</title>
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
            <h2>Nuestro compromiso</h2>
            <div class="contenedor">
                <div class="articulo">
                    <p>Nos gustaría ayudar a los creadores de juegos de mesa noveles y, a su vez, extender la cultura
                        del juego, tal como nosotros la entendemos.</p>
                </div>
                <div class="articulo">
                    <p>Queremos acercar al público esos juegos en los que nosotros, tan firmemente, creemos. Como
                        jugadores y como diseñadores de juegos, aspiramos a ofrecer juegos que tengan una calidad
                        contrastada: solamente aquellos juegos que nosotros, como jugadores, estaríamos dispuesto a
                        comprar y a los que, sobretodo, dedicaríamos un buen rato compartiéndolos con los demás.</p>
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