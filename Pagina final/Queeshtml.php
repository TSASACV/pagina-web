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

        /* Estilo para las imágenes */
        figure {
            text-align: center;
        }

        figure img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <h1>Que es HTML</h1>
    <main>
    <p>El Lenguaje de Marcado de Hipertexto (HTML) es el código que se utiliza para estructurar y desplegar una página web y sus contenidos. Por ejemplo, sus contenidos podrían ser párrafos, una lista con viñetas, o imágenes y tablas de datos. Como lo sugiere el título, este artículo te dará una comprensión básica de HTML y cuál es su función.</p>

    <p>Entonces, ¿qué es HTML en realidad?
        HTML no es un lenguaje de programación; es un lenguaje de marcado que define la estructura de tu contenido. HTML consiste en una serie de elementos que usarás para encerrar diferentes partes del contenido para que se vean o comporten de una determinada manera. Las etiquetas de encierre pueden hacer de una palabra o una imagen un hipervínculo a otro sitio, se pueden cambiar palabras a cursiva, agrandar o achicar la letra, etc. Por ejemplo, toma la siguiente línea de contenido:</p>

    <pre>
        <code>
            Mi gato es muy gruñon
        </code>
    </pre>

    <p>Si quieres especificar que se trata de un párrafo, podrías encerrar el texto con la etiqueta de párrafo (<code>&lt;p&gt;</code>):</p>

    <pre>
        <code>
            &lt;p&gt;Mi gato es muy gruñon&lt;/p&gt;
        </code>
    </pre>

    <h2>Anatomía de un elemento HTML</h2>

    <p>Explora este párrafo en mayor profundidad.</p>

    <figure>
        <img src="grumpy-cat-small.png" alt="Anatomía de un elemento HTML" />
        <figcaption>Las partes principales del elemento HTML</figcaption>
    </figure>

    <p>Los elementos pueden también tener atributos, que se ven así:</p>

    <figure>
        <img src="grumpy-cat-attribute-small.png" alt="Atributo HTML" />
        <figcaption>Los atributos contienen información adicional acerca del elemento</figcaption>
    </figure>

    <p>Un atributo debe tener siempre:</p>

    <ul>
        <li>Un espacio entre este y el nombre del elemento (o del atributo previo, si el elemento ya posee uno o más atributos).</li>
        <li>El nombre del atributo, seguido por un signo de igual (=).</li>
        <li>Comillas de apertura y de cierre, encerrando el valor del atributo.</li>
    </ul>

    <p>Los elementos pueden anidarse, colocando elementos dentro de otros elementos, pero deben cerrarse ordenadamente.</p>

    <h2>Elementos vacíos</h2>

    <p>Algunos elementos no poseen contenido y son llamados elementos vacíos. Toma, por ejemplo, el elemento <code>&lt;img&gt;</code>:</p>

    <pre>
        <code>
            &lt;img src="images/firefox-icon.png" alt="Mi imagen de prueba" /&gt;
        </code>
    </pre>

    <h2>Anatomía de un documento HTML</h2>

    <p>Hasta ahora has visto lo básico de elementos HTML individuales, pero estos no son muy útiles por sí solos. Ahora verás cómo los elementos individuales son combinados para formar una página HTML entera. Vuelve a visitar el código de tu ejemplo en <code>index.html</code>:</p>

    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
              &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;Mi pagina de prueba&lt;/title&gt;
              &lt;/head&gt;
              &lt;body&gt;
                &lt;img src="images/firefox-icon.png" alt="Mi imagen de prueba" /&gt;
              &lt;/body&gt;
            &lt;/html&gt;
        </code>
    </pre>

    <p>Tienes:</p>

    <ul>
        <li><code>&lt;!DOCTYPE html&gt;</code> — el tipo de documento.</li>
        <li><code>&lt;html&gt;&lt;/html&gt;</code> — el elemento <code>&lt;html&gt;</code>.</li>
        <li><code>&lt;head&gt;&lt;/head&gt;</code> — el elemento <code>&lt;head&gt;</code>.</li>
        <li><code>&lt;meta charset="utf-8"&gt;</code> — <code>&lt;meta&gt;</code> para establecer el juego de caracteres.</li>
        <li><code>&lt;title&gt;&lt;/title&gt;</code> — el elemento <code>&lt;title&gt;</code> para el título de la página.</li>
        <li><code>&lt;body&gt;&lt;/body&gt;</code> — el elemento <code>&lt;body&gt;</code> para el contenido visible.</li>
    </ul>

    <h2>Imágenes</h2>

    <p>Presta atención nuevamente al elemento imagen <code>&lt;img&gt;</code>:</p>

    <pre>
        <code>
            &lt;img src="images/firefox-icon.png" alt="Mi imagen de prueba" /&gt;
        </code>
    </pre>
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