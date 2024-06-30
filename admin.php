<?php
session_start();
if ($_SESSION['type'] !== 'admin') {
    header("Location: prueba.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
</head>
<body>
    <h1>Bienvenido, Administrador</h1>
    <table border="1">
        <tr>
            <th>Estudiante</th>
            <th>Calificación</th>
        </tr>
        <tr>
            <td>Estudiante 1</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Estudiante 2</td>
            <td>85</td>
        </tr>
    </table>
</body>
</html>
