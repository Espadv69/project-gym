<!DOCTYPE html>
<html lang="en">
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

            <input type="text" name="name" placeholder="Ingrese su nombre">

            <input type="text" name="username" placeholder="Crea tu usuario">

            <input type="email" name="email" placeholder="nombre@ejemplo.com">

            <input type="password" name="pass1" placeholder="Ingrese contraseña...">

            <input type="password" name="pass2" placeholder="Repita contraseña...">

            <button>Registrar</button>

        </form>
    </main>

    <p>Si ya tienes cuenta <a href="index.php" class="a-log-leg">pinche aquí</a></p>
</body>
</html>