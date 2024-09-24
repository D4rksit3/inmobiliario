<?php
// Procesar formulario si se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("db.php"); // Incluir el archivo de conexión a la base de datos

    $correo = $_POST['correo'];
    $contrasena_plana = $_POST['contrasena'];
    $contrasena_cifrada = password_hash($contrasena_plana, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $correo, $contrasena_cifrada);

    if ($stmt->execute()) {
        echo "<p>Usuario creado exitosamente</p>";
    } else {
        echo "<p>Error al crear el usuario: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<h2>Crear Usuario</h2>
<form action="dashboard.php?page=create_user" method="POST">
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <button type="submit">Crear Usuario</button>
</form>
