<?php
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

    $sql = "INSERT INTO usuarios (username, password, type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $pass, $type);

    if ($stmt->execute()) {
        header("Location: prueba.html");
        exit();
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

