<?php
include("db.php"); // Incluir el archivo que contiene la conexión a la base de datos

// Datos del nuevo usuario
/* $correo = "jroque@admin.com"; // El correo del nuevo usuario
$contrasena_plana = "123456"; // La contraseña sin cifrar */

// Cifrar la contraseña antes de guardarla en la base de datos
$contrasena_cifrada = password_hash($contrasena_plana, PASSWORD_DEFAULT);

// Preparar la consulta SQL para insertar un nuevo usuario
$sql = "INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)";

// Preparar la declaración
$stmt = $conn->prepare($sql);

// Enlazar los parámetros
$stmt->bind_param("ss", $correo, $contrasena_cifrada);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Usuario creado exitosamente";
} else {
    echo "Error al crear el usuario: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
