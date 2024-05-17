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
        

        <form action="./php/contacto_be.php" method="post" class="form-contacto">

            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>
            <input type="email" name="email" placeholder="Ingrese su email" required>
            <input type="number" name="telefono" placeholder="Ingrese su número de teléfono" required>
            <input type="submit" value="Enviar">

        </form>

    </body>
</html>