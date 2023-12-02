<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de eliminar datos en MySQL</title>
    <style>
        body {
            text-align: center;
            background-color: #f8f8f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            margin-top: 60px;
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

        .table-buttons {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-buttons th,
        .table-buttons td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f2f2f2;
        }

        .table-buttons th {
            background-color: #4CAF50;
            color: white;
        }

        .table-buttons tr:hover {
            background-color: #ddd;
        }

        .delete-button {
            background-color: #f00;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #d00;
        }
    </style>
</head>

<body>
    <div class="menu">
    <a href="Ejemplo4.php">Volver</a>
    </div>

    <?php
    $host = "localhost";
    $puerto = "3306";
    $usuario = "root";
    $contraseña = "";
    $baseDeDatos = "prueba";
    $tabla = "clientes";

    function Conectarse()
    {
        global $host, $puerto, $usuario, $contraseña, $baseDeDatos, $tabla;

        if (!($link = mysqli_connect("$host:$puerto", $usuario, $contraseña))) {
            echo "Error conectandose a la base de datos";
            exit();
        } else {
            echo "Esta es nuestra base de datos de clientes.<br>";
        }

        if (!mysqli_select_db($link, $baseDeDatos)) {
            echo "Error seleccionando la base de datos";
            exit();
        } else {
            echo "Proporciona los datos de tus clientes.<br>";
        }
        return $link;
    }

    $link = Conectarse();

    if ($_GET) {
        $queryDelete = "DELETE FROM $tabla WHERE ID_Clientes = " . $_GET['IDForm'] . ";";
        $resultDelete = mysqli_query($link, $queryDelete);

        if ($resultDelete) {
            echo "<strong>El registro se ha eliminado con éxito.</strong><br>";
        } else {
            echo "Hubo un problema borrando el registro";
        }
    }

    $query = "SELECT * FROM $tabla";
    $result = mysqli_query($link, $query);
    ?>

    <table class="table-buttons">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>{$row["ID_Clientes"]}</td>";
            echo "<td>{$row["Nombre"]}</td>";
            echo "<td>{$row["Dirección"]}</td>";
            echo "<td>{$row["Teléfono"]}</td>";
            echo "<td><button class='delete-button' onclick='eliminarRegistro({$row["ID_Clientes"]})'>Eliminar</button></td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>

    </table>
    <hr>

    <script>
        function eliminarRegistro(id) {
            var confirmar = confirm("¿Estás seguro de que deseas eliminar este registro?");
            if (confirmar) {
                window.location.href = "?IDForm=" + id;
            }
        }
    </script>

</body>

</html