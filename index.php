<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Página PHP</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div>
        <h1>¡Hola, Mundo!</h1>
        <p>Esta es una página web básica creada con PHP.</p>
        <?php
            // Este es un comentario de una sola línea en PHP
            /*
            Este es un comentario
            de múltiples líneas
            en PHP
            */

            // Imprimimos la fecha actual
            echo "<p>La fecha de hoy es: " . date("d/m/Y") . "</p>";

            // Definimos una variable y la imprimimos
            $nombre = "Juan";
            echo "<p>Bienvenido, " . $nombre . "!</p>";

            // Creamos un array y lo recorremos
            $colores = array("rojo", "verde", "azul");
            echo "<p>Mis colores favoritos son:</p>";
            echo "<ul>";
            foreach ($colores as $color) {
                echo "<li>" . $color . "</li>";
            }
            echo "</ul>";

            // Creamos una función y la llamamos
            function saludar($nombre) {
                echo "<p>¡Hola, " . $nombre . "!</p>";
            }

            saludar("María");
            saludar("Pedro");
        ?>
    </div>
</body>
</html>
