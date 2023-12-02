<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #2980b9;
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
                <a href="Queesphp.php" class="logout-btn">Que es PHP</a>
                <a href="Queeshtml.php" class="logout-btn">Que es HTML</a>
                <a href="Prinejemplos.php" class="logout-btn">Ejemplos</a>
                <a href="Inicio.php" class="logout-btn">Cerrar Sesión</a>
                
                <!-- Agrega más opciones de menú aquí -->
            </div>
        </div>
    </div>
    <h1>Este codigo nos muestra una conexion basica de PHP</h1>
    <main>
        <p>El código muestra una conexión básica a una base de datos MySQL. El código se divide en dos partes:</p>
        
        <pre>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;

                &lt;?php
                    try {
                        $mysqli_conexion = new mysqli("localhost", "root", "", "prueba");
                        if(!$mysqli_conexion->connect_errno) { 
                            echo '&lt;div class="message">Hemos podido conectarnos con MySQL&lt;/div&gt;';
                        } 
                    } catch (Exception $x) {
                        echo '&lt;div class="error"&lt;Error de conexión con la base de datos ' . $x-&lt;getMessage() . '&lt;/div&gt;';
                    }
                ?&gt;

            &lt;/body&gt;
        &lt;/html&gt;
        <a href="Conexion.php" class="btn">Conexión</a>
        </pre>
        <p>El código se divide en dos partes:</p>

<ul>
    <li>La primera parte, que se encuentra dentro de la etiqueta <code>try</code>, intenta establecer una conexión a la base de datos.</li>
    <li>La segunda parte, que se encuentra dentro de la etiqueta <code>catch</code>, se ejecuta si la conexión falla.</li>
</ul>

<p>En resumen, el código PHP que se muestra realiza los siguientes pasos:</p>

<ol>
    <li>Intenta establecer una conexión a la base de datos MySQL.</li>
    <li>Si la conexión se establece correctamente, muestra un mensaje de éxito en el navegador.</li>
    <li>Si la conexión falla, muestra un mensaje de error en el navegador.</li>
</ol>

<p>Aquí tienes una explicación más detallada de cada paso:</p>

<h2>Paso 1: Establecer la conexión</h2>

<p>La función <code>new mysqli()</code> crea un nuevo objeto de conexión. El objeto de conexión se pasa los siguientes parámetros:</p>

<ul>
    <li><code>localhost</code>: La dirección del servidor MySQL.</li>
    <li><code>root</code>: El nombre de usuario de la base de datos.</li>
    <li><code>``</code>: La contraseña de la base de datos.</li>
    <li><code>prueba</code>: El nombre de la base de datos.</li>
</ul>

<p>Estos parámetros se utilizan para establecer una conexión a la base de datos MySQL. Si la conexión se establece correctamente, la variable <code>$mysqli_conexion</code> tendrá un valor no nulo.</p>

<h2>Paso 2: Mostrar un mensaje de éxito</h2>

<p>Si la conexión se establece correctamente, la variable <code>$mysqli_conexion</code> tendrá un valor no nulo. En este caso, el código muestra un mensaje de éxito en el navegador.</p>

<p>El código utiliza la etiqueta <code>div</code> para crear un elemento de división con la clase <code>message</code>. El elemento de división contiene un mensaje que indica que la conexión se ha establecido correctamente.</p>

<h2>Paso 3: Mostrar un mensaje de error</h2>

<p>Si la conexión falla, la variable <code>$mysqli_conexion</code> tendrá un valor nulo. En este caso, el código muestra un mensaje de error en el navegador.</p>

<p>El código utiliza la etiqueta <code>div</code> para crear un elemento de división con la clase <code>error</code>. El elemento de división contiene un mensaje que indica que la conexión ha fallado.</p>
    </main>
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