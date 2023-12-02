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
    <h1>Este codigo nos muestra una consulta en PHP</h1>
    <main>
    <p>El código PHP muestra una consulta a una base de datos MySQL. El código se divide en las siguientes partes:</p>

<ol>
  <li>
    <h2>Conexión a la base de datos</h2>
    <p>La primera parte del código se encarga de conectarse a la base de datos. Para ello, utiliza la función <code>mysqli_connect()</code>, que recibe los siguientes parámetros:</p>
    <ul>
      <li><code>host</code>: La dirección del servidor MySQL.</li>
      <li><code>usuario</code>: El nombre de usuario de la base de datos.</li>
      <li><code>contrasena</code>: La contraseña de la base de datos.</li>
    </ul>
        <pre>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;

                &lt;?php
                $host = "localhost";
                $puerto = "3306";
                $usuario = "root";
                $contrasena = "";
                $baseDeDatos = "PRUEBA";
                $tabla = "clientes";
                function Conectarse(){
                    global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
                    if (!($link = mysqli_connect("$host:$puerto", $usuario, $contrasena))) {
                        echo "Error conectando a la base de datos.&lt;br&gt;";
                        exit();
                    } else {
                        echo "ELEMENTOS EN NUESTRA BASE DE DATOS.&lt;br&gt;";
                    }
                    if (!mysqli_select_db($link, $baseDeDatos)) {
                        echo "Error seleccionando la base de datos.&lt;br&gt;";
                        exit();
                    }
                    return $link;
                }
                $link = Conectarse();
                $query = "SELECT Nombre, Teléfono, Dirección FROM clientes;";
                $result = mysqli_query($link, $query);
                ?&gt;
                &lt;table&gt;
                &lt;tr&gt;
                &lt;th>Nombre&lt;/th&gt;
                &lt;th>Teléfono&lt;/th&gt;
                &lt;th>Dirección&lt;/th&gt;
                &lt;/tr&gt;
                &lt;?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "&lt;tr&gt;";
                    echo "&lt;td&gt;{$row["Nombre"]}&lt;/td&gt;";
                    echo "&lt;td&gt;{$row["Teléfono"]}&lt;/td&gt;";
                    echo "&lt;td&gt;{$row["Dirección"]}&lt;/td&gt;";
                    echo "&lt;/tr&gt;";
                }
                mysqli_free_result($result);
                mysqli_close($link);
                ?&gt;
                &lt;/table&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        <a href="Conecion2.php" class="btn">Consulta</a>
        </pre>
        <p>En este caso, el código utiliza los siguientes valores para estos parámetros:</p>
    <ul>
      <li><code>host</code>: <code>localhost</code></li>
      <li><code>usuario</code>: <code>root</code></li>
      <li><code>contrasena</code>: <code>""</code></li>
    </ul>
    <p>Si la conexión se establece correctamente, la función <code>mysqli_connect()</code> devuelve un objeto de conexión. Si la conexión falla, la función devuelve <code>false</code>.</p>
  </li>
  <li>
  <h2>Ejecución de la consulta</h2>
    <p>La segunda parte del código ejecuta la consulta a la base de datos. Para ello, utiliza la función <code>mysqli_query()</code>, que recibe los siguientes parámetros:</p>
    <ul>
      <li><code>link</code>: El objeto de conexión a la base de datos.</li>
      <li><code>query</code>: La consulta a ejecutar.</li>
    </ul>
    <p>En este caso, la consulta es la siguiente:</p>
    <pre><code>SELECT Nombre, Teléfono, Dirección FROM clientes;</code></pre>
    <p>Esta consulta devuelve todos los registros de la tabla <code>clientes</code>.</p>
  </li>
  <li>
  <h2>Recorrido de los resultados</h2>
    <p>La tercera parte del código recorre los resultados de la consulta. Para ello, utiliza un bucle <code>while</code> que se repite mientras la función <code>mysqli_fetch_array()</code> devuelva un registro.</p>
    <p>Cada vez que el bucle se repite, la función <code>mysqli_fetch_array()</code> devuelve un array asociativo con los datos del registro actual. El código utiliza este array para mostrar los datos en una tabla HTML.</p>
  </li>
  <li>
  <h2>Liberación de recursos</h2>
    <p>La cuarta parte del código libera los recursos utilizados por la consulta. Para ello, utiliza las funciones <code>mysqli_free_result()</code> y <code>mysqli_close()</code>.</p>
    <p>La función <code>mysqli_free_result()</code> libera la memoria utilizada por los resultados de la consulta. La función <code>mysqli_close()</code> cierra la conexión a la base de datos.</p>
  </li>
</ol>

<p>En resumen, el código PHP  realiza los siguientes pasos:</p>

<ul>
  <li>Conecta a la base de datos MySQL.</li>
  <li>Ejecuta una consulta a la base de datos.</li>
  <li>Recorre los resultados de la consulta.</li>
  <li>Libera los recursos utilizados por la consulta.</li>
</ul>
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