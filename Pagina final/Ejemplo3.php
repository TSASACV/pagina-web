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
    <h1>Este codigo nos muestra como ingresar datos PHP</h1>
    <main>
    <p>El código PHP nos muestra cómo ingresar datos a una base de datos MySQL. El código se divide en las siguientes partes:</p>
        <pre>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Ejemplo&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;

                &lt;?php
                // Dirección o IP del servidor MySQL 
                $host = "localhost&lt;";
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
                        echo "Error conectando a la base de datos.&lt;br&gt;";
                        exit();
                    }else{
                        echo "&lt;h1&gt;Base de Datos de Clientes.&lt;/h1&gt; &lt;br&gt;";
                    }
                    if (!mysqli_select_db($link, $baseDeDatos)){
                        echo "Error seleccionando la base de datos.&lt;br&gt;";
                        exit();
                    } else{
                        echo "Ingresa los siguientes datos de los clientes.&lt;br&gt;";
                    }return $link;
                }
                $link= Conectarse();
                if($_POST){
                    $queryInsert= "INSERT INTO $tabla (Nombre, Dirección, Teléfono) VALUES ('".$_POST['NombreForm']."','".$_POST['DireccionForm']."','".$_POST['TelefonoForm']."');";
                    $resultInsert = mysqli_query($link, $queryInsert);
                    if($resultInsert){
                        echo "&lt;strong&gt;Se ingresaron los registros con éxito&lt;/strong&gt;. &lt;br&gt;";
                    }else{
                        echo "No se ingresaron los registros. &lt;br&gt;"; 
                    }
                }
                $query = "SELECT Nombre, Dirección, Teléfono FROM $tabla;";
                $result = mysqli_query($link, $query);
                ?&gt;
                
                &lt;form action="" method="post"&gt;
                &lt;label for="NombreForm"&gt;Nombre:&lt;/label&gt;
                &lt;input type="text" id="NombreForm" name="NombreForm" required&gt; &lt;br&gt;&lt;br&gt;
                &lt;label for="DireccionForm"&gt;Dirección:&lt;/label&gt;
                &lt;input type="text" id="DireccionForm" name="DireccionForm" required&gt; &lt;br&gt;&lt;br&gt;
                &lt;label for="TelefonoForm"&gt;Teléfono:&lt;/label&gt;
                &lt;input type="text" id="TelefonoForm" name="TelefonoForm" required&gt; &lt;br&gt;&lt;br&gt;
                &lt;input type="submit" value="Guardar"&gt;
                &lt;/form&gt;

            &lt;/body&gt;
        &lt;/html&gt;
        <a href="Conexion3.php" class="btn">Ingresar datos</a>
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

<h2>Ingreso de datos</h2>

<p>La segunda parte del código se encarga de ingresar los datos a la base de datos. Para ello, utiliza la función <code>mysqli_query()</code>, que recibe los siguientes parámetros:</p>

<ul>
  <li><code>link</code>: El objeto de conexión a la base de datos.</li>
  <li><code>query</code>: La consulta a ejecutar.</li>
</ul>

<p>En este caso, la consulta es la siguiente:</p>

```sql
INSERT INTO $tabla (Nombre, Dirección, Teléfono)
VALUES ('".$_POST['NombreForm']."','".$_POST['DireccionForm']."','".$_POST['TelefonoForm']."');


<p>Esta consulta inserta un nuevo registro en la tabla <code>clientes</code> con los datos ingresados por el usuario en el formulario.</p>

<h2>Mostrar los datos</h2>

<p>La tercera parte del código muestra los datos ingresados en la base de datos. Para ello, utiliza la función <code>mysqli_query()</code> para ejecutar la siguiente consulta:</p>

sql
SELECT Nombre, Dirección, Teléfono FROM $tabla;


<p>Esta consulta devuelve todos los registros de la tabla <code>clientes</code>.</p>

<h2>Formulario</h2>

<p>El código también incluye un formulario HTML que permite al usuario ingresar los datos que desea guardar en la base de datos. El formulario incluye los siguientes campos:</p>

* **Nombre**
* **Dirección**
* **Teléfono**

<p>Cuando el usuario hace clic en el botón "Guardar", el código PHP procesa los datos ingresados en el formulario y los ingresa a la base de datos.</p>

<h2>En resumen</h2>

<p>El código PHP que nos muestras permite al usuario ingresar datos a una base de datos MySQL de la siguiente manera:</p>

1. El usuario ingresa los datos en el formulario HTML.
2. El código PHP procesa los datos ingresados en el formulario.
3. El código PHP inserta los datos en la base de datos.
4. El código PHP muestra los datos ingresados en la base de datos.
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