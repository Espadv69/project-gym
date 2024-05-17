<?php 
require_once "./conn.php";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO datos(nombre, apellidos, email, telefono, comentario)VALUES(
    '$nombre',
    '$apellidos',
    '$email',
    '$telefono',
    '$comentario'
)";

// SI EL EMAIL ES REPETIDO NO AÑADIR A LA BASE DE DATOS
$check_email = mysqli_query($conn, "SELECT * FROM datos WHERE email='$email'");

if(mysqli_num_rows($check_email) > 0) {
    echo "
    <script>
        alert('Los datos ya fueron registrados anteriormente, se le enviará un correo electrónico.');
        window.location = '../home.php';
    </script>
    ";
    exit;
}

// SI EL NÚMERO DE TELÉFONO ES REPETIDO NO AÑADIR A LA BASE DE DATOS
$check_telefono = mysqli_query($conn, "SELECT * FROM datos WHERE telefono='$telefono'");

if(mysqli_num_rows($check_telefono) > 0) {
    echo "
    <script>
        alert('Los datos ya fueron registrados anteriormente, se le enviará un correo electrónico.');
        window.location = '../home.php';
    </script>
    ";
    exit;
}

// SI PASA LOS CHECKS AÑADIR A LA BASE DE DATOS
$insert = mysqli_query($conn, $query);

if($insert) {
    echo "
    <script>
        alert('Contactaremos con usted, gracias por usar nuestros servicios');
        window.location = '../home.php';
    </script>
    ";
}