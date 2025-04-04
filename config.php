<?php
/*
  Archivo de configuración para la base de datos.
  Define las credenciales de la base de datos y establece la conexión.
*/

// Credenciales de la base de datos
define('DB_SERVER', 'switchyard.proxy.rlwy.net');  // Dirección del servidor de la base de datos
define('DB_USERNAME', 'root');       // Nombre de usuario de la base de datos
define('DB_PASSWORD', 'MZobbxIrWDVulfJAJtoMABjnXjvaeQhQ');  // Contraseña de la base de datos
define('DB_NAME', 'railway');          // Nombre de la base de datos (¡OJO! Se usará 'railway', no 'user')
define('DB_PORT', 32834); // Puerto de la base de datos


// Intentar conectarse a la base de datos
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);


// Verificar la conexión
if ($link === false) {
  die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

// Crear la base de datos si no existe (opcional, y normalmente no se hace en un script de conexión)
$sql_create_db = "CREATE DATABASE IF NOT EXISTS railway"; // Cambiado a 'railway'
if (mysqli_query($link, $sql_create_db)) {
    //echo "Base de datos creada o ya existente.\n"; // Comentado para no mostrar en producción
} else {
    //echo "Error al crear la base de datos: " . mysqli_error($link) . "\n"; // Comentado para no mostrar en producción
}

// Seleccionar la base de datos
mysqli_select_db($link, DB_NAME); // Asegurarse de seleccionar la base de datos correcta


// Crear la tabla 'users' si no existe
$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  correo VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  dispositivo VARCHAR(255)
)";
if (mysqli_query($link, $sql_create_table)) {
  //echo "Tabla 'users' creada o ya existente.\n"; // Comentado para no mostrar en producción
} else {
  echo "Error al crear la tabla 'users': " . mysqli_error($link) . "\n";
}

// Nota: No cerramos la conexión aquí.  La conexión se mantiene abierta para ser usada por otros scripts.
//       Es importante cerrarla explícitamente cuando ya no se necesite, en el script que la usó.
?>
