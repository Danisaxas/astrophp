<?php
// Incluir el archivo de configuración
require_once "config.php";

// Definir variables e inicializar con valores vacíos
$username = $correo = $password = $confirm_password = $device = "";
$username_err = $correo_err = $password_err = $confirm_password_err = $device_err = "";

// Procesar los datos del formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar el nombre de usuario
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, ingrese un nombre de usuario.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "El nombre de usuario solo puede contener letras, números y guiones bajos.";
    } else {
        // Preparar la consulta SQL
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Establecer el parámetro
            $param_username = trim($_POST["username"]);

            // Ejecutar la consulta preparada
            if (mysqli_stmt_execute($stmt)) {
                // Almacenar el resultado
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Este nombre de usuario ya está en uso.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "¡Vaya! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }

            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        }
    }

    // Validar el correo electrónico
    if (empty(trim($_POST["correo"]))) {
        $correo_err = "Por favor, ingrese un correo electrónico.";
    } elseif (!filter_var(trim($_POST["correo"]), FILTER_VALIDATE_EMAIL)) {
        $correo_err = "Por favor, ingrese un correo electrónico válido.";
    } else {
        // Preparar la consulta SQL
        $sql = "SELECT id FROM users WHERE correo = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_correo);

            // Establecer el parámetro
            $param_correo = trim($_POST["correo"]);

            // Ejecutar la consulta preparada
            if (mysqli_stmt_execute($stmt)) {
                // Almacenar el resultado
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $correo_err = "Este correo electrónico ya está en uso.";
                } else {
                    $correo = trim($_POST["correo"]);
                }
            } else {
                echo "¡Vaya! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }

            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        }
    }


    // Validar la contraseña
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, ingrese una contraseña.";
    } elseif (strlen(trim($_POST["password"])) < 8) {
        $password_err = "La contraseña debe tener al menos 8 caracteres.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar la confirmación de la contraseña
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Por favor, confirme la contraseña.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Las contraseñas no coinciden.";
        }
    }

    // Validar el dispositivo
    if (empty(trim($_POST["device"]))) {
        $device_err = "Por favor, ingrese el dispositivo.";
    } else {
        $device = trim($_POST["device"]);
    }


    // Verificar si no hay errores de entrada antes de insertar en la base de datos
    if (empty($username_err) && empty($correo_err) && empty($password_err) && empty($confirm_password_err) && empty($device_err)) {

        // Preparar la consulta SQL
        $sql = "INSERT INTO users (username, correo, password, dispositivo) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_correo, $param_password, $param_device);

            // Establecer los parámetros
            $param_username = $username;
            $param_correo = $correo;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Hashear la contraseña
            $param_device = $device;

            // Ejecutar la consulta preparada
            if (mysqli_stmt_execute($stmt)) {
                // Redirigir a la página de inicio de sesión
                header("Location: index.php");
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
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Registro</h2>
        <p>Por favor, complete este formulario para crear una cuenta.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nombre de usuario</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" name="correo" class="form-control <?php echo (!empty($correo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $correo; ?>">
                <span class="invalid-feedback"><?php echo $correo_err; ?></span>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirmar contraseña</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Dispositivo</label>
                <input type="text" name="device" class="form-control <?php echo (!empty($device_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $device; ?>">
                <span class="invalid-feedback"><?php echo $device_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registrarse">
            </div>
            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a>.</p>
        </form>
    </div>
</body>
</html>
