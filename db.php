<?php
$servername = "localhost"; // Cambiar según tu configuración
$username = "nuevo_usuario"; // Cambiar según tu configuración
$password = "tu_contraseña"; // Cambiar según tu configuración
$dbname = "inmobiliario"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
