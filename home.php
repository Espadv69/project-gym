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
    <title>Home</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="./css/style.css"
    />

</head>
<body class="body-home">

    <header>
        <img src="./img/boxer.jpg" alt="boxeadora">
        <h2>GYM BROTHER'S</h2>
    </header>


<nav
    class="navbar navbar-expand-sm navbar-light bg-light"
>
    <div class="container">

        <a class="a" href="#">Home🏠</a>

        <a class="a" href="./rutina.php">Rutina☀️</a>

        <a class="a" href="./nutricion.php">Nutrición🍎</a>

        <a class="a" href="#">Calcular IMC⚖️</a>

        <a class="a" href="#">Contacto📱</a>

        <a class="a" href="./php/close_conn.php">Cerrar sesión❌</a>

    </div>
</nav>

        <div class="fotos">

            <div class="foto1">
                <img src="" alt="">
            </div>

            <div class="foto2">
                <img src="" alt="">
            </div>

        </div>


</body>
</html>




        