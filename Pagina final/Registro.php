<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
        }

        .signup-form {
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="password"],
        .signup-form input[type="email"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .signup-form button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .signup-form button:hover {
            background-color: #45a049;
        }

        .login {
            text-align: center;
            padding: 20px 0;
        }

        .login a {
            color: #000;
            padding: 10px 15px;
            background-color: #fff;
            border-radius: 3px;
            text-decoration: none;
        }

        .login a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php
        // Dirección o IP del servidor MySQL 
        $host = "localhost";
        // Puerto del servidor MySQL 
        $puerto = "3306";
        // Nombre de usuario del servidor MySQL 
        $usuario = "root";
        // Contraseña del usuario 
        $contrasena = "";
        // Nombre de la base de datos 
        $baseDeDatos = "prueba_final";
        // Nombre de la tabla a trabajar 
        $tabla = "usuarios";

        function Conectarse(){
            global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
            if (!($link = mysqli_connect($host, $usuario, $contrasena, $baseDeDatos, $puerto))) {
                echo "Error conectando a la base de datos.<br>";
                exit();
            }
            return $link;
        }

        $link = Conectarse();

        if ($_POST) {
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellido'];
            $contrasena = $_POST['Contraseña'];

            $queryInsert = "INSERT INTO $tabla (Nombre, Apellido, Contraseña) VALUES ('$nombre', '$apellido', '$contrasena')";
            $resultInsert = mysqli_query($link, $queryInsert);

            if ($resultInsert) {
                echo "<strong>Se ingresaron los registros con éxito</strong>. <br>";
            } else {
                echo "No se ingresaron los registros. <br>";
            }
        }

        $query = "SELECT Nombre, Apellido, Contraseña FROM $tabla";
        $result = mysqli_query($link, $query);
    ?>
    <div class="container">
        <div class="signup-form">
            <form action="" method="post">
                <h2 class="text-center">Registrarse</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellido" name="Apellido" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </div>
            </form>
            <div class="login">
                <p>¿Ya tienes una cuenta? <a href="Inicio.php">Iniciar Sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>