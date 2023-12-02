<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Consulta a la base de datos</title>
    <style>
        body {
            text-align: center;
            background-color: #f8f8f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 800px;
            margin: 80px auto 0 auto; /* Agregado margen superior para evitar que el menú se sobreponga */
            text-align: left;
        }

        h1 {
            font-size: 28px;
            margin-top: 30px;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        h2 {
            font-size: 22px;
            margin-top: 20px;
        }

        .menu {
            background-color: #4CAF50;
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
        }

        .menu a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #45a049;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            max-width: 800px;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="menu">
        <a href="Ejemplo2.php">Volver</a>
    </div>

    <div id="container" class="table-container">
        <h1>Consulta a la base de datos</h1>

        <?php
        $host = "localhost";
        $puerto = "3306";
        $usuario = "root";
        $contrasena = "";
        $baseDeDatos = "PRUEBA";
        $tabla = "clientes";

        function Conectarse()
        {
            global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;

            if (!($link = mysqli_connect("$host:$puerto", $usuario, $contrasena))) {
                echo "Error conectando a la base de datos.<br>";
                exit();
            } else {
                echo "ELEMENTOS EN NUESTRA BASE DE DATOS.<br>";
            }

            if (!mysqli_select_db($link, $baseDeDatos)) {
                echo "Error seleccionando la base de datos.<br>";
                exit();
            }

            return $link;
        }

        $link = Conectarse();
        $query = "SELECT Nombre, Teléfono, Dirección FROM clientes;";
        $result = mysqli_query($link, $query);
        ?>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>{$row["Nombre"]}</td>";
                echo "<td>{$row["Teléfono"]}</td>";
                echo "<td>{$row["Dirección"]}</td>";
                echo "</tr>";
            }

            mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
    </div>
</body>

</html>