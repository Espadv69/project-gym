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
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body-reg-log">

    <h1>Register</h1>
    
    <main>
        <form action="./php/reg_be.php" method="post" class="form-reg">

            <input type="text" name="name" placeholder="Ingrese su nombre" required>

            <input type="text" name="username" placeholder="Crea tu usuario" required>

            <input type="email" name="email" placeholder="nombre@ejemplo.com" required>

            <input type="password" name="pass1" placeholder="Ingrese contraseña..." required>

            <input type="password" name="pass2" placeholder="Repita contraseña..." required>

            <button>Registrar</button>

        </form>
    </main>

    <p>Si ya tienes cuenta <a href="index.php" class="a-log-leg">pinche aquí</a></p>
</body>
</html>