<?php
// Procesar formulario si se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("db.php"); // Incluir el archivo de conexión a la base de datos

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $imagen = ''; // Manejo de archivo omitido para simplificar, deberías manejar la carga de archivos adecuadamente

    // Subir imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $imagen = 'uploads/' . basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
    }

    $sql = "INSERT INTO propiedades (nombre, precio, descripcion, imagen) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $precio, $descripcion, $imagen);

    if ($stmt->execute()) {
        echo "<p>Propiedad agregada exitosamente</p>";
    } else {
        echo "<p>Error al agregar la propiedad: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<h2>Agregar Propiedad</h2>
<form action="dashboard.php?page=add_property" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen">

    <button type="submit">Agregar Propiedad</button>
</form>
