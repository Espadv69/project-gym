<?php 
require_once "./conn.php";

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass1 = hash('sha512', $pass1);
$pass2 = $_POST['pass2'];
$pass2 = hash('sha512', $pass2);

$query = "INSERT INTO login(name, username, email, pass1, pass2)VALUES(
    '$name',
    '$username',
    '$email',
    '$pass1',
    '$pass2'
)";


$insert = mysqli_query($conn, $query);

if($query) {
    echo "
    <script>
        alert('TE HAS REGISTRADO CON ÉXITO, INICIA SESIÓN ✔️');
        window.location = '../index.php';
    </script>
    ";
}
