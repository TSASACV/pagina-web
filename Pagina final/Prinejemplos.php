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
        #image-container {
            margin-top: 20px;
        }
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.header {
    background-color: #4CAF50;
    color: #fff;
    padding: 15px;
    text-align: right;
    position: relative;
}

.logout-btn {
    display: inline-block;
    padding: 8px 16px;
    margin-top: 5px;
    background-color: #45a049;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.logout-btn:hover {
    background-color: #4CAF50;
}

.dropdown {
    display: inline-block;
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #4CAF50;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
    left: -100px; /* Ajusta esta propiedad para cambiar la posición del menú desplegable */
}

.dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

h1 {
    color: #4CAF50;
    text-align: center;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

p {
    line-height: 1.6;
    color: #555;
}

h2, h3 {
    color: #4CAF50;
}

pre {
    background-color: #f4f4f4;
    padding: 10px;
    overflow-x: auto;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="header" id="header">
        <span id="username"></span>
        <div class="dropdown">
            <button class="logout-btn">Menú</button>
            <div class="dropdown-content">
                <a href="Principal.php" class="logout-btn">Inicio</a>
                <a href="Queesphp.php" class="btn">Que es PHP</a>
                <a href="Queeshtml.php" class="btn">Que es HTML</a>
                <a href="Prinejemplos.php" class="btn">Ejemplos</a>
                <a href="Inicio.php" class="logout-btn">Cerrar Sesión</a>
                
                <!-- Agrega más opciones de menú aquí -->
            </div>
        </div>
    </div>
    <div class="main-container">
        <h1 class="heading">Ejemplo de una base de datos creada con PHP</h1>
        <p>Esta sección está creada con el propósito de mostrarte las diferentes funciones de PHP junto con HTML. En este caso, uso una base de datos alojada en un servidor MySQL</p>
        <a href="Ejemplo.php" class="btn">Conexion</a>
        <a href="Ejemplo2.php" class="btn">Consulta</a>
        <a href="Ejemplo3.php" class="btn">Ingresar datos</a>
        <a href="Ejemplo4.php" class="btn">Eliminar</a>
        
        <div id="image-container">
            <img id="changing-image" src="que-es-una-pagina-web.png" alt="Imagen Cambiante">
        </div>
    </div>

    <script>
        var images = ["PHP-logo.svg.png", "HTML5_Logo_512.png", "1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png"]; // Lista de imágenes
        var currentIndex = 0;
        var imageElement = document.getElementById("changing-image");

        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length;
            imageElement.src = images[currentIndex];
        }

        // Cambia la imagen cada 5 segundos (5000 milisegundos)
        setInterval(changeImage, 2500);
    </script>
    <script>
        // Obtener el nombre del usuario desde el servidor
        fetch('get_username.php')
            .then(response => response.text())
            .then(username => {
                // Actualizar el contenido del menú superior con el nombre del usuario
                document.getElementById('username').textContent = '' + username + '';
            })
            .catch(error => console.error('Error al obtener el nombre del usuario', error));
    </script>
</body>
</html>