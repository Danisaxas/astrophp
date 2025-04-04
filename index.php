<?php
// index.php

// Incluir el archivo de configuración (donde se define la constante DB_SERVER)
require_once "config.php";

// Define una constante para la ruta base de la aplicación
define('BASE_URL', '/'); // Cambia esto si tu aplicación no está en el directorio raíz

// Función para obtener la ruta actual
function get_current_route() {
    $uri = $_SERVER['REQUEST_URI'];
    // Elimina la ruta base
    $uri = str_replace(BASE_URL, '', $uri);
    // Elimina los parámetros de la cadena de consulta
    $uri = strtok($uri, '?');
    // Elimina la barra diagonal final
    $uri = rtrim($uri, '/');
    return $uri;
}

// Obtiene la ruta actual
$route = get_current_route();

// Maneja las rutas
switch ($route) {
    case '':
    case 'index':
        // Redirige a login.php
        header("Location: login.php");
        exit;
        break;
    case 'login':
        // Inicia la sesión solo si no está ya iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Incluye el archivo de inicio de sesión
        include "login.php";
        break;
    case 'register':
        // Inicia la sesión solo si no está ya iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Incluye el archivo de registro
        include "register.php";
        break;
    case 'welcome':
        // Inicia la sesión solo si no está ya iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Incluye el archivo de bienvenida
        include "welcome.php";
        break;
    case 'logout':
        // Incluye el archivo de cierre de sesión
        include "logout.php";
        break;
    default:
        // Si la ruta no coincide con ninguna de las anteriores, muestra un error 404
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 No encontrado</h1>";
        echo "<p>La página solicitada no se ha encontrado.</p>";
        break;
}
?>
