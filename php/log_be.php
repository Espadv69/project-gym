<?php 
session_start();
require_once "./conn.php";

$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass1 = hash('sha512', $pass1);

$check_login = mysqli_query($conn, "SELECT * FROM login WHERE email='$email' AND pass1='$pass1'");

if(mysqli_num_rows($check_login) > 0) {
    $_SESSION['username'] = $email;
    header("location: ../home.php");
    exit;
    
} else {
    echo "
    <script>
        alert('EMAIL O CONTRASEÑA INCORRECTOS ❌');
        window.location = '../index.php';
    </script>
    ";
}