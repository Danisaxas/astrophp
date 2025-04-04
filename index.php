<?php
session_start();

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
        // Si el usuario ya está logueado, redirige a la página de bienvenida
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            header("Location: welcome.php");
            exit;
        }
        // Incluye el archivo de inicio de sesión
        include "login.php";
        break;
    case 'register':
        // Incluye el archivo de registro
        include "register.php";
        break;
    case 'welcome':
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
        echo "<h1>404 Not Found</h1>";
        echo "<p>La página solicitada no se ha encontrado.</p>";
        break;
}
?>
