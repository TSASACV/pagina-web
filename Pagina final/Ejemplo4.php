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
    <h1>Este codigo nos muestra como eliminar datos mediante PHP</h1>
    <main>
    <p>El código PHP muestra cómo eliminar datos de una base de datos MySQL. El código se divide en las siguientes partes:</p>

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
                $contraseña = "";
                $baseDeDatos = "prueba";
                $tabla = "clientes";
                function Conectarse(){
                    global $host, $puerto, $usuario, $contraseña, $baseDeDatos, $tabla;
                    if (!($link = mysqli_connect("$host:$puerto", $usuario, $contraseña))) {
                        echo "Error conectandose a la base de datos";
                        exit();
                    } else {
                        echo "Esta es nuestra base de datos de clientes.&lt;br&gt;";
                    }
                    if (!mysqli_select_db($link, $baseDeDatos)) {
                        echo "Error seleccionando la base de datos";
                        exit();
                    } else {
                        echo "Proporciona los datos de tus clientes.&lt;br&gt;";
                    }
                    return $link;
                }
                $link = Conectarse();
                if ($_GET) {
                    $queryDelete = "DELETE FROM $tabla WHERE ID_Clientes = " . $_GET['IDForm'] . ";";
                    $resultDelete = mysqli_query($link, $queryDelete);
                    if ($resultDelete) {
                        echo "&lt;strong&gt;El registro se ha eliminado con éxito.&lt;/strong&gt;&lt;br&gt;";
                    } else {
                        echo "Hubo un problema borrando el registro";
                    }
                }
                $query = "SELECT * FROM $tabla";
                $result = mysqli_query($link, $query);
                ?&gt;
                &lt;table class="table-buttons"&gt;
                &lt;tr&gt;
                &lt;th&gt;ID&lt;/th&gt;
                &lt;th&gt;Nombre&lt;/th&gt;
                &lt;th&gt;Dirección&lt;/th&gt;
                &lt;th&gt;Teléfono&lt;/th&gt;
                &lt;th&gt;Acciones&lt;/th&gt;
                &lt;/tr&gt;
                &lt;?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "&lt;tr&gt;";
                    echo "&lt;td&gt;{$row["ID_Clientes"]}&lt;/td&gt;";
                    echo "&lt;td&gt;{$row["Nombre"]}&lt;/td&gt;";
                    echo "&lt;td&gt;{$row["Dirección"]}&lt;/td&gt;";
                    echo "&lt;td&gt;{$row["Teléfono"]}&lt;/td&gt;";
                    echo "&lt;td&gt;&lt;button class='delete-button' onclick='eliminarRegistro({$row["ID_Clientes"]})'&gt;Eliminar&lt;/button&gt;&lt;/td&gt;";
                    echo "&lt;/tr&gt;";
                }
                mysqli_free_result($result);
                mysqli_close($link);
                ?&gt;
                &lt;/table&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        <a href="Conexion44.php" class="btn">Eliminar</a>
        </pre>
        <h2>Conexión a la base de datos</h2>

<p>La primera parte del código se encarga de conectarse a la base de datos MySQL. Para ello, utiliza la función <code>mysqli_connect()</code>, que recibe los siguientes parámetros:</p>

<ul>
  <li><code>host</code>: La dirección o IP del servidor MySQL.</li>
  <li><code>puerto</code>: El puerto del servidor MySQL.</li>
  <li><code>usuario</code>: El nombre de usuario del servidor MySQL.</li>
  <li><code>contrasena</code>: La contraseña del usuario.</li>
</ul>

<p>En este caso, el código utiliza los siguientes valores para estos parámetros:</p>

<ul>
  <li><code>host</code>: <code>localhost</code></li>
  <li><code>puerto</code>: <code>3306</code></li>
  <li><code>usuario</code>: <code>root</code></li>
  <li><code>contrasena</code>: <code>""</code></li>
</ul>

<p>Si la conexión se establece correctamente, la función <code>mysqli_connect()</code> devuelve un objeto de conexión. Si la conexión falla, la función devuelve <code>false</code>.</p>

<h2>Eliminar datos</h2>

<p>La segunda parte del código se encarga de eliminar los datos de la base de datos. Para ello, utiliza la función <code>mysqli_query()</code>, que recibe los siguientes parámetros:</p>

<ul>
  <li><code>link</code>: El objeto de conexión a la base de datos.</li>
  <li><code>query</code>: La consulta a ejecutar.</li>
</ul>

<p>En este caso, la consulta es la siguiente:</p>

```sql
DELETE FROM $tabla WHERE ID_Clientes = " . $_GET['IDForm'] . ";"


<p>Esta consulta elimina el registro de la tabla <code>clientes</code> con el ID especificado en la variable <code>$_GET['IDForm']</code>.</p>

<h2>Mostrar los datos</h2>

<p>La tercera parte del código muestra los datos de la base de datos. Para ello, utiliza la función <code>mysqli_query()</code> para ejecutar la siguiente consulta:</p>

sql
SELECT * FROM $tabla;


<p>Esta consulta devuelve todos los registros de la tabla <code>clientes</code>.</p>

<h2>Botón de eliminar</h2>

<p>El código también incluye un botón HTML que permite al usuario eliminar un registro de la base de datos. El botón tiene el siguiente código:</p>

html
&lt;button class="delete-button" onclick='eliminarRegistro({$row["ID_Clientes"]})'>Eliminar&lt;/button>


<p>Cuando el usuario hace clic en el botón, el código PHP asocia el ID del registro a la variable <code>$_GET['IDForm']</code>. A continuación, se ejecuta la consulta <code>DELETE</code> para eliminar el registro de la base de datos.</p>

<h2>En resumen</h2>

<p>El código PHP que nos muestras permite eliminar datos de una base de datos MySQL de la siguiente manera:</p>

1. El usuario selecciona el registro que desea eliminar.
2. El código PHP asocia el ID del registro a la variable <code>$_GET['IDForm']</code>.
3. El código PHP ejecuta la consulta <code>DELETE</code> para eliminar el registro de la base de datos.
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