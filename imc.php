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
    <body class="body body-imc">
        <?php require_once "./template/navbar.php"?>

        <section class="secc-imc">

            <img src="./img/tabla.webp" alt="Tabla IMC">

            <input type="number" class="altura" placeholder="Ponga su altura" value="" required>
            <input type="number" class="peso" placeholder="Ponga su peso" value="" required>
            <input type="text" class="total" placeholder="total" value="" readonly required>
            
            <input type="button" value="Calcular" class="boton">

        </section>

        <?php require_once "./template/footer.php"?>

        <script src="./js/main.js"></script>
    </body>
</html>