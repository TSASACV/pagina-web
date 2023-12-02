<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de ingreso de datos en base de datos MySQL</title>
    <style>
        body {
            text-align: center;
            background-color: #f8f8f8;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ddd;
            max-width: 400px;
            margin: 80px auto;
            background-color: white;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h1 {
            margin-top: 60px; 
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="Ejemplo3.php">Volver</a>
    </div>

    <?php
        // Dirección o IP del servidor MySQL 
        $host = "localhost:";
        // Puerto del servidor MySQL 
        $puerto = "3306";
        // Nombre de usuario del servidor MySQL 
        $usuario = "root";
        // Contraseña del usuario 
        $contrasena = "";
        // Nombre de la base de datos 
        $baseDeDatos ="prueba";
        // Nombre de la tabla a trabajar 
        $tabla = "clientes";
        function Conectarse(){
            global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
            if (!($link = mysqli_connect($host."+".$puerto, $usuario, $contrasena))) {
                echo "Error conectando a la base de datos.<br>";
                exit();
            }else{
                echo "<h1>Base de Datos de Clientes.</h1> <br>";
            }
            if (!mysqli_select_db($link, $baseDeDatos)){
                echo "Error seleccionando la base de datos.<br>";
                exit();
            } else{
                echo "Ingresa los siguientes datos de los clientes.<br>";
            }return $link;
        }
        $link= Conectarse();
        if($_POST){
            $queryInsert= "INSERT INTO $tabla (Nombre, Dirección, Teléfono) VALUES ('".$_POST['NombreForm']."','".$_POST['DireccionForm']."','".$_POST['TelefonoForm']."');";
            $resultInsert = mysqli_query($link, $queryInsert);
            if($resultInsert){
                echo "<strong>Se ingresaron los registros con éxito</strong>. <br>";
            }else{
                echo "No se ingresaron los registros. <br>"; 
            }
        }
        $query = "SELECT Nombre, Dirección, Teléfono FROM $tabla;";
        $result = mysqli_query($link, $query);
    ?>

    <hr>

    <form action="" method="post">
        <label for="NombreForm">Nombre:</label>
        <input type="text" id="NombreForm" name="NombreForm" required> <br><br>
        
        <label for="DireccionForm">Dirección:</label>
        <input type="text" id="DireccionForm" name="DireccionForm" required> <br><br>

        <label for="TelefonoForm">Teléfono:</label>
        <input type="text" id="TelefonoForm" name="TelefonoForm" required> <br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>