<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: A Hypertext Preprocessor</title>
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
                <a href="Videos.php" class="logout-btn">Videos</a>
                <a href="Inicio.php" class="logout-btn">Cerrar Sesión</a>
                
                <!-- Agrega más opciones de menú aquí -->
            </div>
        </div>
    </div>

    <h1>¿Qué es PHP?</h1>
    

    <main>
        <p>PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular, especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.</p>

        <h2>Bien, pero ¿qué significa realmente?</h2>
        <p>Un ejemplo nos aclarará las cosas:</p>

        <h3>Ejemplo #1 Un ejemplo introductorio</h3>

        <pre>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;

                &lt;?php
                    echo "¡Hola, soy un script de PHP!";
                ?&gt;

            &lt;/body&gt;
        &lt;/html&gt;
        </pre>

        <p>En este ejemplo, el código de PHP (entre las etiquetas &lt;?php y ?&gt;) se ejecuta en el servidor y genera HTML. El resultado es que el navegador muestra "¡Hola, soy un script de PHP!".</p>

        <h3>¿Qué puede hacer PHP?</h3>
        <p>PHP ofrece una amplia gama de características, desde la generación de contenido dinámico hasta la manipulación de imágenes, la creación de programas de gestión de bases de datos (DBMS) y más. A pesar de su simplicidad, PHP es una herramienta muy potente para la programación web.</p>
        <h2>Principales ventajas del PHP</h2>
    <p>Fácil integración en las bases de datos. Además, puede ser usado en la gran mayoría.</p>
    <p>Ofrece seguridad. Es muy útil para evitar ataques informáticos.</p>
    <p>Lenguaje multiplataforma y aceptado por los navegadores más populares (los mismos que aceptan HTML).</p>
    <p>Relativamente fácil de aprender. Cuenta con una sintaxis muy clara y puede usarse en proyectos simples. Al mismo tiempo, también es ideal para proyectos de alta complejidad.</p>
    <p>Permite trabajar con una gran cantidad de datos, por lo que es ideal incluso para las webs más populares.</p>
    <p>Código Abierto: PHP es un proyecto de código abierto, lo que significa que su código fuente es accesible y modificable por la comunidad. Esto ha llevado a la creación de una amplia base de usuarios y una comunidad activa.</p>

    <h2>Algunas desventajas del PHP</h2>
    <p>No puede ocultarse el código fuente de las páginas que se desarrollan. Aun así, este hecho es indiferente en muchas ocasiones.</p>
    <p>Los scripts en PHP pueden tener un funcionamiento relativamente lento, lo que puede perjudicar la experiencia del usuario. Sin embargo, esto puede solucionarse mediante determinadas estrategias de caché.</p>
    <p>Aunque permite una gran seguridad informática, su configuración es extremadamente compleja.</p>
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