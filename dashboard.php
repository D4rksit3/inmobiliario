<?php
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h1>Intranet</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php?page=create_user">Crear Usuario</a></li>
                    <li><a href="dashboard.php?page=add_property">Agregar Propiedad</a></li>
                    <li><a href="dashboard.php?page=create_role">Crear Rol</a></li>
                </ul>
            </nav>
            <a href="logout.php" class="logout">Cerrar Sesión</a>
        </aside>
        <main class="content">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) {
                case 'create_user':
                    include 'create_user.php';
                    break;
                case 'add_property':
                    include 'add_property.php';
                    break;
                case 'create_role':
                    include 'create_role.php';
                    break;
                default:
                    echo '<h2>Bienvenido al Dashboard</h2>';
                    echo '<p>Seleccione una opción del menú para comenzar.</p>';
                    break;
            }
            ?>
        </main>
    </div>
</body>
</html>
