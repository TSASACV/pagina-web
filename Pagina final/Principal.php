<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #28a745; /* Cambia el color a verde (#28a745) */
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .logout-btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #fff;
            background-color: #dc3545;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        .main-container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 10px;
        }

        .heading {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745; /* Cambia el color a verde (#28a745) */
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #218838; /* Cambia el color a un tono más oscuro (#218838) */
        }

        .btn + .btn {
            margin-left: 10px;
        }

        .image-container {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left; /* Alinea el texto a la izquierda */
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-right: 20px; /* Ajusta el margen derecho según tu preferencia */
        }

        .image-container h2 {
            margin: 0; /* Elimina el margen superior del h2 */
        }

        .image-container p {
            max-width: 60%; /* Ajusta el ancho del texto según tu preferencia */
        }
    </style>
</head>
<body>
    <div class="header" id="header">
        <span id="username"></span>
        <a href="Inicio.php" class="logout-btn">Cerrar Sesión</a>
    </div>

    <div class="main-container">
        <h1 class="heading">Principios basicos de HTML y PHP</h1>
        <p>Aquí aprenderás los principios básicos de PHP y HTML. Estos serán reforzados mediante ejemplos que podrás consultar en las opciones debajo.</p>
        <a href="mailto:20630279@itocotlan.com" class="btn">Contactame</a>
        <a href="Queesphp.php" class="btn">Que es PHP</a>
        <a href="Queeshtml.php" class="btn">Que es HTML</a>
        <a href="Prinejemplos.php" class="btn">Ejemplos</a>
        <a href="Videos.php" class="btn">Videos</a>

        <div class="image-container">
            <img src="descarga.jpeg" alt="">
            <h2>Hola mi nombre es Alexis Sahagun toscano</h2>
        </div>
        <p>Esta página está hecha con el propósito de darte los conocimientos básicos sobre HTML, PHP y así comenzar con este mundo en la creación de páginas web.</p>
        <p>Gracias por visitar mi sitio web. Si tiene alguna pregunta, no dude en ponerse en contacto conmigo.</p>
    </div>

    <script>
        // Obtener el nombre del usuario desde el servidor
        fetch('get_username.php')
            .then(response => response.text())
            .then(username => {
                // Actualizar el contenido del menú superior con el nombre del usuario
                document.getElementById('username').textContent = '¡Bienvenido, ' + username + '!';
            })
            .catch(error => console.error('Error al obtener el nombre del usuario', error));
    </script>
</body>
</html>