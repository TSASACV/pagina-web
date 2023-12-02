<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos con PHP</title>
    <!--<link rel="stylesheet" type="text/css" href="Estilo 1.css">-->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #4caf50;
            margin-bottom: 20px;
        }

        button {
            padding: 15px 25px;
            font-size: 18px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            outline: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .message, .error {
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            color: #2c3e50;
        }

        .error {
            background-color: #e74c3c;
            border: 1px solid #c0392b;
            color: #fff;
        }

        footer {
            margin-top: auto;
            background-color: #2c3e50;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            border-top: 2px solid #3498db;
        }
    </style>
</head>
<body>
    <h1>Base de datos con PHP</h1><br>
    <?php
    try {
        $mysqli_conexion = new mysqli("localhost", "root", "", "prueba");
        if(!$mysqli_conexion->connect_errno) { 
            echo '<div class="message">Hemos podido conectarnos con MySQL</div>';
        } 
    } catch (Exception $x) {
        echo '<div class="error">Error de conexión con la base de datos ' . $x->getMessage() . '</div>';
    }
    ?>
    <br>
    <button type="button" onclick="window.location.href='Ejemplo.php'">Volver</button>
</body>
</html>