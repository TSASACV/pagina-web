<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
        }

        .login-form {
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 3px;
        }

        .login-form button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .login-form button:hover {
            background-color: #45a049;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0;
        }

        .sign-up a {
            color: #000;
            padding: 10px 15px;
            background-color: #fff;
            border-radius: 3px;
        }
    </style>
</head>

<body>
<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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

function Conectarse()
{
    global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
    $link = mysqli_connect($host, $usuario, $contrasena, $baseDeDatos, $puerto);

    if (!$link) {
        echo "Error conectando a la base de datos.<br>";
        exit();
    }
    return $link;
}

$link = Conectarse();

// Define una variable para almacenar mensajes
$mensaje = "";

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos del formulario
    $usuario = $_POST['Nombre'];
    $contrasena = $_POST['Contraseña'];

    // Consulta SQL para verificar la existencia del usuario
    $query = "SELECT * FROM usuarios WHERE Nombre = '$usuario' AND Contraseña = '$contrasena'";
    $result = mysqli_query($link, $query);

    // Verifica si se encontró un usuario
    if (mysqli_num_rows($result) > 0) {
        // Almacena el nombre de usuario en la sesión
        $_SESSION['Nombre'] = $usuario;

        // Redirige al usuario a la página principal
        header("Location: Pagina final\Principal.php");
        exit();
    } else {
        $mensaje = "Usuario o contraseña incorrectos.";
    }
}
?>

    <div class="container">
        <div class="login-form">
            <form method="post" action="">
                <h2 class="text-center">Iniciar Sesión</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" name="Nombre" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                </div>
            </form>
            <div class="sign-up">
                <p>No tienes una cuenta? <a href="Pagina final\Registro.php">Registrarse</a></p>
            </div>

            <!-- Muestra el mensaje después de procesar el formulario -->
            <?php echo $mensaje; ?>
        </div>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>