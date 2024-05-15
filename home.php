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
<body class="body-home" style="height: 200vh;">

    <header>
        <img src="./img/boxer.jpg" alt="boxeadora">
        <h2>GYM BROTHER'S</h2>
    </header>

    <?php require_once "./template/navbar.php"?>

        <div class="fotos">

            <div class="foto1">
                <img src="./img/class.jpg" alt="">
                <p class="descripcion">
                    Descripción
                    
                    El doble Máster en Personal Trainer y Coaching Deportivo va dirigido a trabajadores, emprendedores y empresarias interesadas en el sector del deporte y el sector fitness.

                    El personal trainer es un profesional de la actividad física que ha ganado terreno en los últimos años en el ámbito deportivo. La razón de esto es su capacidad para prescribir ejercicios y fijar objetivos acordes a las condiciones físicas de sus clientes. Siempre desde un enfoque y un análisis individualizado.

                    Por ello, el entrenador personal debe tener una formación completa y óptima para trabajar adecuadamente las metas de cada deportista. Sin duda, nuestra titulación es una gran herramienta para prepararte en este sector.
                </p>
            </div>

            <div class="foto2">
                <img src="" alt="">
            </div>

        </div>

    <?php require_once "./template/footer.php"?>
    
</body>
</html>




        