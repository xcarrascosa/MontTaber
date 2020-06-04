<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, maximum-scale=1">
    <title>Contacto - Mont Tàber Edicions</title>
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
            <h2 class="icon-mail">Contacto</h2>

            <div class="contenedor">
                <div class="formulario">
                    <form action="enviar.php" method="post">
                        <h3>¡Escríbenos!</h3>
                        <input type="text" name="nombre" placeholder="Tu nombre" required>
                        <input type="email" name="correo" placeholder="Tu email" required>
                        <input type="text" name="asunto" placeholder="Asunto" required>
                        <textarea name="mensaje" placeholder="Escribe aquí tu mensaje" required></textarea>
                        <input type="submit" value="Enviar" id="boton">
                    </form>
                </div>
            </div>

        </article>

    </main>

    <?php include("footer.html") ?>

</body>

</html>