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
        class="nav justify-content-center flex-column"
    >
        <a class="nav-link active" href="./rutina.php" aria-current="page">
            Active link
        </a>

        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Disabled link</a>
        <a href="./php/close_conn.php">CERRAR SESIÓN</a>
    </nav>
        



</body>
</html>