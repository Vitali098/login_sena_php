<?php
session_start();
if ($_SESSION['type'] !== 'estudiante') {
    header("Location: prueba.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Estudiante</title>
</head>
<body>
    <h1>Bienvenido, Estudiante</h1>
    <form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido"><br><br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>