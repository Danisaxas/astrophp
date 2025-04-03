<?php
// index.php - Controlador Principal

// Define la ruta base de la aplicación
define('BASE_URL', '/'); // La ruta base es la raíz del dominio

// Incluye el archivo de configuración (opcional)
// include_once 'config.php';

// Función para obtener la ruta de la solicitud
function get_request_uri() {
    $uri = $_SERVER['REQUEST_URI'];
    // Elimina la ruta base
    if (strpos($uri, BASE_URL) === 0) {
        $uri = substr($uri, strlen(BASE_URL));
    }
    // Elimina la cadena de consulta (parámetros después del ?)
    if (($pos = strpos($uri, '?')) !== false) {
        $uri = substr($uri, 0, $pos);
    }
    // Elimina la barra diagonal final
    return rtrim($uri, '/');
}

// Obtiene la ruta de la solicitud
$route = get_request_uri();

// Define las rutas y sus archivos correspondientes
$routes = [
    '' => 'home.php',       // Página de inicio
    'home' => 'home.php',
    'acerca' => 'acerca.php', // Ejemplo de otra página
    'contacto' => 'contacto.php',
    '404' => '404.php' // Página para manejar errores 404
];

// Incluye el archivo de la ruta o muestra un error 404
if (array_key_exists($route, $routes)) {
    include_once $routes[$route];
} else {
    //Si la ruta no existe, muestra la página 404
    include_once $routes['404'];
}
?>
