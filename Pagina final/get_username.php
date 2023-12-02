<?php
// get_username.php

// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (isset($_SESSION['Nombre'])) {
    $username = $_SESSION['Nombre'];
    echo $username;
} else {
    echo "Usuario no autenticado";
}
?>