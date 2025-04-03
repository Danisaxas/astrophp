<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenedor Cuadrado Redondo</title>
    <link href="https://fonts.googleapis.com/css2?family=Edo&family=Minotbug&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgb(36, 59, 85); /* Color de fondo para la página */
        }

        .contenedor-cuadrado {
            width: 379.99px;
            height: 440.12px;
            background-color: rgba(31, 41, 55, 0.85);
            border-radius: 15px;
            position: relative; /* Añadido para posicionamiento absoluto del texto */
            color: white;
            font-size: 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            text-align: center;
            padding-bottom: 20px;
            display: flex; /* Añadido para centrar contenido */
            flex-direction: column;
            align-items: center;
        }

        .contenedor-cuadrado span {
            font-family: 'Minotbug', sans-serif;
            z-index: 2; /* Asegura que el texto esté por encima de la imagen */
            margin-top: 160px; /* Ajustado la posición vertical del texto */
        }

        .profile-photo {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid #121212;
            background-image: url(https://img.icons8.com/?size=100&id=53381&format=png&color=000000);
            background-size: cover;
            background-position: center;
            margin-top: 30px;
            z-index: 1;
        }

        .contenedor-cuadrado .buttons-main {
            display: flex;
            justify-content: center;
            margin-top: 280px;
        }

        .contenedor-cuadrado .buttons-main button {
            background-color: #1E3A8A;
            border: none;
            padding: 10px 15px;
            border-radius: 20px 20px 20px 20px;
            color: white;
            font-size: 14px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            cursor: pointer;
            opacity: 0.7;
            min-width: 48px;
            padding: 12px;
            margin: 0 5px;
        }

        .contenedor-cuadrado .buttons-main button:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        .contenedor-cuadrado .buttons-main button:active {
            transform: scale(0.95);
        }

    </style>
</head>
<body>
    <div class="contenedor-cuadrado">
        <div class="profile-photo"></div>
        <span>Astrozdev</span>
        <div class="buttons-main">
            <button>Info</button>
            <button>Habilidades</button>
            <button>Teams</button>
        </div>
    </div>
</body>
</html>
