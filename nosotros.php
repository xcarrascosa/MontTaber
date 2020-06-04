<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, maximum-scale=1">
    <title>Sobre nosotros - Mont Tàber Edicions</title>
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
            <h2>Quiénes somos</h2>
            <div class="contenedor">
                <div class="articulo">
                    <p>Mont Tàber Edicions es una editorial indie de juegos de mesa nacida en Barcelona en el 2015,
                        resultado de la conjura de tres “jugones” con ganas de comprometerse un paso más allá en su
                        afición.</p>
                    <p>Xavier es el diseñador y José María es el filósofo. Antes también teníamos a un científico. Nos
                        falta un economista.</p>
                </div>
                <div class="articulo">
                    <p>Somos los editores de It’s mine, Emporion y Días de Radio, que son juegos que se editarion
                        gracias a campañas de Verkami.</p>
                    <p>Nuestro último proyecto es la colección de juegos basados en clásicos literarios e historia:
                        Lusitania, Byzanz, El diablo de la botella y Dr. Jekyll & Mr. Hyde.</p>
                    <p>Nuestro último éxito es On the Origin of Species, un juego sobre las investigaciones de Darwin en
                        las Galápagos.</p>
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