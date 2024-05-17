<?php 
session_start();

if(isset($_SESSION['username'])) {
    header("location: ./home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM BRO'S</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body-reg-log">

    <h1>Login</h1>

    <main>
        <form action="./php/log_be.php" method="post" class="form-log">

            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>

            <input type="password" name="pass1" placeholder="Ingrese su contraseña" required>

            <button>Iniciar</button>

        </form>
    </main>

    <p>Si aún no te has registrado <a href="register.php" class="a-log-leg">pinche aquí</a></p>

</body>
</html>
