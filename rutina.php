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
    <body class="body">
        <?php require_once "./template/navbar.php"?>

        <section class="secc-img">

                <img src="./img/rutine1.jpg" alt="Tabla de rutina">               
                <img src="./img/rutine2.jpg" alt="Taza de café sobre un libro">               
                <img src="./img/rutine3.jpg" alt="Mujer haciendo yoga">

                <p>¿Cómo debería organizarme? <br><br> La rutina en el aprendizaje se refiere a la incorporación de una serie de acciones y hábitos planificados y regulares en el proceso de adquirir conocimientos y habilidades. Estas acciones suelen incluir actividades como estudiar, hacer tareas, asistir a clases o participar en prácticas relacionadas con el aprendizaje. <br><br>
                Los hábitos de vida saludable pueden resumirse en los siguientes: Consumir una dieta equilibrada. Tener una higiene personal (incluida la higiene bucal) adecuada. Tener un patrón y una calidad de sueño óptimo.
                </p>
                
                <p>¿Qué debería desayunar? <br><br> En toda rutina de alimentación, es importante dedicar unos minutos a elaborar un desayuno saludable y equilibrado que incluya los alimentos adecuados para ingerir los nutrientes y las proteínas necesarias, aportando a nuestro cuerpo el combustible esencial para comenzar el día con energía. <br><br>
                En cuanto a las bebidas, lo mejor para acompañar un desayuno saludable y completo es optar por una buena taza de café, té o un zumo de frutas recién exprimido, evitando excederse con el azúcar, ya que, con tan solo la fructosa de las frutas, el organismo recibe toda la que necesita. 
                </p>

                <p>¿Cómo empezar mi mañana? <br><br> Si nunca has hecho cardio o hace mucho tiempo que no lo haces, inicia con una caminata de 5 minutos por la mañana y 5 minutos por la tarde o por la noche. Después puedes ir agregando tiempo de manera gradual o acelerar el ritmo. Verás que en cuestión de días o semanas estarás caminando al menos 30 minutos cada día. <br><br>
                Calentamiento: Haz ejercicios de intensidad baja durante 5 a 10 minutos para activar tu sistema cardiovascular y aumentar el flujo sanguíneo a tus músculos. Acondicionamiento: A tu ritmo inicia con 10-20 min. (sugerido por nosotros) de tal manera que gradualmente llegues a los 30 minutos al día.
                </p>


               
        </section>
        <?php require_once "./template/footer.php"?>
    </body>
</html>