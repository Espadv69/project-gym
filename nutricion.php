<?php 
session_start();
if(!isset($_SESSION['username'])) {
    echo "
    <script>
        alert('DEBES INICIAR SESIÓN 😏');
        window.location = './index.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rutina</title>

        <link
            rel="stylesheet"
            href="./css/style.css"
        >

    </head>
    <body>
        <?php require_once "./template/navbar.php"?>

        <section class="secc-nutricion">

            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">

            <p></p>
            <p></p>
            <p></p>
            
        </section>

        <?php require_once "./template/footer.php"?>
    </body>
</html>