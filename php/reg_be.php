<?php 
require_once "./conn.php";

// VARIABLES
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

// CHECK USERNAME
$check_username = mysqli_query($conn, "SELECT * FROM login WHERE username='$username'");

if(mysqli_num_rows($check_username) > 0) {
    echo "
    <script>
        alert('ESTE USUARIO YA ESTÁ EN USO ❌');
        window.location = '../register.php';
    </script>
    ";
    exit;
}

// CHECK EMAIL
$check_email = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");

if(mysqli_num_rows($check_email) > 0) {
    echo "
    <script>
        alert('ESTE EMAIL YA ESTÁ EN USO ❌');
        window.location = '../register.php';
    </script>
    ";
    exit;
}

// CHECK PASSWORDS
if($pass1 !== $pass2) {
    echo "
    <script>
        alert('LAS CONTRASEÑAS NO COINCIDEN ❌');
        window.location = '../register.php';
    </script>
    ";
    exit;
}

// INSERT INTO TABLE
$insert = mysqli_query($conn, $query);

if($query) {
    echo "
    <script>
        alert('TE HAS REGISTRADO CON ÉXITO, INICIA SESIÓN ✔️');
        window.location = '../index.php';
    </script>
    ";
}

mysqli_close($conn);