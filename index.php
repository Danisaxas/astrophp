<?php
/**
 * index.php
 *
 * Punto de entrada de la aplicación. Maneja el enrutamiento de las solicitudes.
 */

// Define la ruta base de la aplicación.
define('BASE_URL', '/'); // Cambiar a '/' si está en la raíz

// Función para cargar controladores.
function cargarControlador($controlador) {
    $nombreControlador = $controlador . 'Controller';
    $archivoControlador = 'controllers/' . $nombreControlador . '.php';

    if (file_exists($archivoControlador)) {
        require_once($archivoControlador);
        if (class_exists($nombreControlador)) {
            return new $nombreControlador();
        } else {
            error_log("La clase {$nombreControlador} no existe en {$archivoControlador}");
            echo "Error: Controlador inválido (Clase no existe).";
            return null;
        }
    } else {
        error_log("El archivo del controlador {$archivoControlador} no se encontró.");
        echo "Error: Controlador no encontrado.";
        return null;
    }
}

// Función para cargar vistas.
function cargarVista($vista, $datos = []) {
    if (!empty($datos)) {
        extract($datos);
    }

    $archivoVista = 'templates/' . $vista . '.php';

    if (file_exists($archivoVista)) {
        require_once($archivoVista);
    } else {
        error_log("El archivo de la vista {$archivoVista} no se encontró.");
        echo "Error: Vista no encontrada.";
    }
}

// Obtiene la URI de la solicitud.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace(BASE_URL, '', $uri);
$uri = rtrim($uri, '/');
$segmentos = explode('/', $uri);

// Enrutamiento
$ruta = isset($segmentos[0]) ? $segmentos[0] : 'inicio'; // Ruta por defecto

switch ($ruta) {
    case 'login':
        $controlador = cargarControlador('usuario'); // Asume que tienes un UsuarioController
        if ($controlador) {
            $controlador->login(); // Llama al método login()
        }
        break;
    case 'inicio': // Ejemplo de otra ruta
        $controlador = cargarControlador('inicio');
        if ($controlador) {
            $controlador->index();
        }
        break;
    // Agrega más rutas aquí
    default:
        // Manejar ruta no encontrada
        cargarVista('errores/404'); // Puedes crear una vista para errores 404
        break;
}
?>
