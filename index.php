<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bd_jos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $type = $_POST['tipo_usuario'];

    $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ? AND type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $pass, $type);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        $_SESSION['type'] = $type;
        
        if ($type == 'admin') {
            header("Location: admin.php");
        } elseif ($type == 'estudiante') {
            header("Location: estudiante.php");
        }
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    $stmt->close();
}

$conn->close();
?>
