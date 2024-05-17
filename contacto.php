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
    <body class="body body-contacto">
        <?php require_once "./template/navbar.php"?>
        

        <form action="./php/contacto_be.php" method="post" class="form-contacto">

            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>
            <input type="email" name="email" placeholder="Ingrese su email" required>
            <input type="number" class="telefono" name="telefono" placeholder="Ingrese su número de teléfono" required>
            <textarea name="comentario" placeholder="Ingrese un comentario. (OPCIONAL)" rows="5"></textarea>
            <input type="submit" value="Enviar">

        </form>


        <?php require_once "./template/footer.php"?>
    </body>
</html>