<?php
session_start();

// Si el usuario no está logueado, redirigir a la página de inicio de sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8; /* Un tono grisáceo muy claro */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            background-color: #ffffff; /* Blanco */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1); /* Sutil sombra */
            max-width: 800px; /* Ancho máximo */
            width: 100%;
            box-sizing: border-box;
        }
        h1 {
            color: #2c3e50; /* Un azul oscuro, casi negro */
            margin-bottom: 20px;
            font-weight: 600; /* Peso de la fuente semi-bold */
        }
        p {
            color: #667885; /* Un gris más suave */
            margin-bottom: 30px;
            font-size: 18px; /* Tamaño de fuente un poco más grande */
            line-height: 1.7; /* Espaciado entre líneas para mejor legibilidad */
        }
        .logout-button {
            background-color: #e74c3c; /* Rojo */
            color: white;
            padding: 12px 25px; /* Padding un poco más grande */
            border: none;
            border-radius: 6px; /* Bordes redondeados */
            cursor: pointer;
            font-size: 18px; /* Tamaño de fuente más grande */
            transition: background-color 0.3s ease; /* Transición suave */
            margin-top: 10px;
            display: inline-block; /* Para que el ancho se ajuste al contenido */
        }
        .logout-button:hover {
            background-color: #c0392b; /* Un rojo más oscuro al pasar el mouse */
        }
        .logout-button:active {
            background-color: #a93226; /* Un rojo aún más oscuro al hacer click */
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 24px; /* Tamaño de fuente más pequeño en pantallas pequeñas */
            }
            p {
                font-size: 16px; /* Tamaño de fuente más pequeño en pantallas pequeñas */
            }
            .logout-button {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <p>Esta es una página de bienvenida minimalista.  Has iniciado sesión exitosamente.  Haz clic en el botón de abajo para cerrar sesión.</p>
        <a href="logout.php" class="logout-button">Cerrar sesión</a>
    </div>
</body>
</html>
