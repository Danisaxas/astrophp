<?php
// login.php
// Iniciar sesión solo si no está ya iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incluir el archivo de configuración (donde se define la constante DB_SERVER)
require_once "config.php";

$username = "";
$password = "";
$login_err = "";
$device = ""; // Para almacenar el dispositivo

// Procesar los datos del formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el nombre de usuario está vacío
    if (empty(trim($_POST["username"]))) {
        $login_err = "Por favor, ingrese su nombre de usuario.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Verificar si la contraseña está vacía
    if (empty(trim($_POST["password"]))) {
        $login_err = "Por favor, ingrese su contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Obtener el dispositivo del usuario
    $device = $_SERVER['HTTP_USER_AGENT'];

    // Validar las credenciales
    if (empty($login_err)) {
        // Preparar la consulta SQL
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Establecer los parámetros
            $param_username = $username;

            // Ejecutar la consulta preparada
            if (mysqli_stmt_execute($stmt)) {
                // Almacenar el resultado
                mysqli_stmt_store_result($stmt);

                // Verificar si existe el nombre de usuario, si existe, verificar la contraseña
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Vincular el resultado
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        // Verificar si la contraseña coincide
                        if (password_verify($password, $hashed_password)) {
                            // La contraseña es correcta, iniciar una nueva sesión
                            //session_start();  // No es necesario iniciarla de nuevo aquí

                            // Almacenar datos en variables de sesión
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Actualizar el dispositivo del usuario en la base de datos
                            $update_device_sql = "UPDATE users SET dispositivo = ? WHERE id = ?";
                            $update_device_stmt = mysqli_prepare($link, $update_device_sql);
                            mysqli_stmt_bind_param($update_device_stmt, "si", $param_device, $id);
                            $param_device = $device; // Usar la variable $device que obtuvimos de $_SERVER
                            mysqli_stmt_execute($update_device_stmt);
                            mysqli_stmt_close($update_device_stmt);

                            // Redirigir al usuario a la página de bienvenida
                            header("Location: welcome.php");
                            exit; // Asegurarse de que el script se detenga después de la redirección
                        } else {
                            // La contraseña no es válida
                            $login_err = "Contraseña incorrecta.";
                        }
                    }
                } else {
                    // El nombre de usuario no existe
                    $login_err = "No existe una cuenta con ese nombre de usuario.";
                }
            } else {
                echo "¡Vaya! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }

            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        }
    }

    // Cerrar la conexión
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
            margin: 0 auto;
        }

        /* Añadido margin: 0 auto; para centrar el formulario */
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Iniciar sesión</h2>
        <p>Por favor, ingrese sus credenciales para iniciar sesión.</p>

        <?php
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nombre de usuario</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($login_err)) ? 'is-invalid' : ''; ?>"
                       value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $login_err; ?></span>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password"
                       class="form-control <?php echo (!empty($login_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $login_err; ?></span>
            </div>
            <div class="form-group" style="display: none;">
                <label>Dispositivo</label>
                <input type="text" name="device" class="form-control" value="<?php echo $device; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Iniciar sesión">
            </div>
            <p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p>
        </form>
    </div>
</body>
</html>
