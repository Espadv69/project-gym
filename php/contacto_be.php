<?php 
require_once "./conn.php";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$insert = mysqli_query($conn, "INSERT INTO datos(nombre, apellidos, email, telefono, comentario)VALUES(
    '$nombre',
    '$apellidos',
    '$email',
    '$telefono',
    '$comentario'
)");

if($insert) {
    echo "
    <script>
        alert('Contactaremos con usted, gracias por usar nuestros servicios');
        window.location = '../home.php';
    </script>
    ";
}