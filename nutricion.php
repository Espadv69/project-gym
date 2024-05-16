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
    <body class="body-nutricion">
        <?php require_once "./template/navbar.php"?>

        <section class="secc-nutricion">

            <img src="./img/nutricion2.jpg" alt="">

            <!-- parrafo foto2 👇-->

            <p>Características nutricionales de los frutos secos.👇 <br><br>
            Los frutos secos son considerados como un “extra” dentro de la dieta. Pero, en la actualidad, han ganado protagonismo como recurso para aperitivos o “matar” el hambre. En esos casos, entran a formar parte de cierto desorden dentro de la dieta que puede tener sus consecuencias en la salud. Esas consecuencias se deben, sobre todo, al hábito incorrecto que supone más que a las características de los alimentos
            </p>

            <img src="./img/nutricion3.jpg" alt="">

            <!--- parrafo foto1 👇-->

            <p>👆Características nutricionales de las frutas. <br><br>

            Proporcionan un importante aporte vitamínico (vitaminas A, C, B1, B2, B6, ácido fólico) y mineral (potasio, hierro, calcio, magnesio, sílice, zinc, sulfatos, fosfatos, cloruros). Aportan fibra, principalmente celulosa y pectinas.
            </p>

            <img src="./img/nutricion1.jpg" alt="">

            <!--- parrafo foto3 👇-->

            <p>👆¿Qué azúcares son saludables y cuáles hay que evitar? <br><br>
            El azúcar se ha convertido en la encarnación del mal, pero no todos los azúcares son iguales. Invertido, libre, intrínseco, añadido... aquí tienes una guía para saber cuáles son un "sí" y cuáles un "mejor, no". <br><br>
            Es raro que a día de hoy alguien nos hable del azúcar sin más, casi siempre se le pone un apellido o se le caracteriza con un adjetivo. Con ellos se amplía información, y sirven para orientarnos sobre si estamos ante lo peor en azúcares, si esos no son tan malos o si -sorpresa- puede ser hasta bueno. Con la guía de hoy, aprenderemos a llamar a cada uno por su nombre, veremos de cuáles hay que huir e incluso los que podemos consumir sin restricciones.
            </p>

        </section>

        <?php require_once "./template/footer.php"?>
    </body>
</html>