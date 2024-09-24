<?php
    include ("buscar.php");
  include ("nav.php");
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro - Intranet</title>
    <style>
        /* Estilos globales */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Fondo negro */
            color: #fff; /* Texto blanco */
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenedor del formulario */
        .form-container {
            background-color: #2eca6a; /* Color verde (#2eca6a) */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #000; /* Título en negro */
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #000; /* Color del texto de las etiquetas en negro */
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #000; /* Botón negro */
            color: #fff; /* Texto blanco */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #fff; /* Botón cambia a blanco al pasar el ratón */
            color: #000; /* Texto negro al pasar el ratón */
        }

        /* Responsivo */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Ingresar a la intranet</h2>
        <form action="procesar.php" method="POST">
          
            
            <label for="correo">Usuario:</label>
            <input type="email" id="correo" name="correo" required>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>

</body>
</html>
