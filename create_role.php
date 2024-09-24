<?php
// Procesar formulario si se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("db.php"); // Incluir el archivo de conexión a la base de datos

    $nombre_rol = $_POST['nombre_rol'];

    $sql = "INSERT INTO roles (nombre_rol) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_rol);

    if ($stmt->execute()) {
        echo "<p>Rol creado exitosamente</p>";
    } else {
        echo "<p>Error al crear el rol: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<h2>Crear Rol</h2>
<form action="dashboard.php?page=create_role" method="POST">
    <label for="nombre_rol">Nombre del Rol:</label>
    <input type="text" id="nombre_rol" name="nombre_rol" required>

    <button type="submit">Crear Rol</button>
</form>
