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
<body class="body-home body">

    <header>
        <img src="./img/boxer.jpg" alt="boxeadora">
        <h2>GYM BROTHER'S</h2>
    </header>

    <?php require_once "./template/navbar.php"?>

        <div class="fotos">

            <div class="foto1">
                <img
                    src="./img/class.jpg"
                    alt="Portada de cursos online"
                >

                <p class="descripcion">
                    <span>Descripción:</span> <br>
                    
                    El doble Máster en Personal Trainer y Coaching Deportivo va dirigido a trabajadores, emprendedores y empresarias interesadas en el sector del deporte y el sector fitness. <br><br> 

                    El personal trainer es un profesional de la actividad física que ha ganado terreno en los últimos años en el ámbito deportivo. La razón de esto es su capacidad para prescribir ejercicios y fijar objetivos acordes a las condiciones físicas de sus clientes. Siempre desde un enfoque y un análisis individualizado. <br><br>  

                    Por ello, el entrenador personal debe tener una formación completa y óptima para trabajar adecuadamente las metas de cada deportista. Sin duda, nuestra titulación es una gran herramienta para prepararte en este sector. <br><br> 
                </p>
            </div>

            <div class="foto2">
                <img
                    src="./img/boxing-children.jpg"
                    alt="Portada de niños boxeando bajo la lluvia"
                >

                <p class="descripcion">
                    <span>Descripción:</span> <br>

                    La titulación Máster en Fit-Boxing + Máster en Nutrición Deportiva y Coach Nutricional puede cursarse en dos modalidades: online y a distancia. Si eliges la modalidad a distancia, una vez recibida la matrícula se te enviará a tu domicilio el pack formativo que consta de los manuales de estudio y el cuaderno de ejercicios. Si eliges la modalidad online, una vez gestionada tu matrícula recibirás un correo electrónico con las claves de acceso al campus virtual, donde encontrarás todo el material de estudio. <br><br>

                    El sistema de estudio de este Máster se adapta al ritmo y a las necesidades del alumno. Es decir, el estudiante es el responsable de planificar y organizar sus horas de estudio, igual que de decidir cuándo se presenta al examen. Aún así, tendrá el apoyo y el asesoramiento de un tutor durante todo el curso, a quién podrá preguntarle cualquier duda o cuestión, tanto acerca del temario como del sistema de estudio. <br><br>
                </p>
            </div>

        </div>

    <?php require_once "./template/footer.php"?>
    
</body>
</html>




        