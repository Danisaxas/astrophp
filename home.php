<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            font-family: 'Segoe UI', system-ui, sans-serif; /* Más moderna */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3e5f5; /* Color lavanda claro */
            color: #311b92; /* Morado oscuro */
            transition: background-color 0.5s ease; /* Transición suave */
        }
        body:hover {
            background-color: #ede7f6; /* Ligeramente más claro al pasar el cursor */
        }
        .container {
            text-align: left;
            padding: 25px;
            border-radius: 12px;
            background-color: #fff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15); /* Sombra más pronunciada */
            max-width: 450px;
            width: 95%;
            animation: fadeIn 1s ease, pulse 2s infinite alternate; /* Animaciones de entrada y pulso */
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px); /* Ligeramente elevado al pasar el cursor */
        }
        h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
            color: #9c27b0; /* Morado más vivo */
            text-align: center;
            letter-spacing: -0.02em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);
        }
        p {
            font-size: 1.15em;
            margin-bottom: 12px;
            line-height: 1.7; /* Espaciado entre líneas mejorado */
            color: #5e35b1;
        }
        a {
            color: #ff4081; /* Rosa acento */
            text-decoration: none;
            font-size: 1.2em;
            font-weight: 600; /* Negrita */
            transition: color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            padding: 8px 16px;
            border-radius: 25px;
            background-color: transparent;
            border: 2px solid #ff4081;
        }
        a:hover {
            color: #fff;
            background-color: #ff4081;
            transform: scale(1.05); /* Ligeramente más grande al pasar el cursor */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .profile-icon {
            width: 120px; /* Tamaño aumentado */
            height: auto;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%; /* Hace que el ícono sea un círculo */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra para el ícono */
            transition: transform 0.3s ease;
        }
        .profile-icon:hover {
            transform: scale(1.1); /* Ligeramente más grande al pasar el cursor */
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.02); /* Ligeramente más grande */
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="animate__animated animate__heartBeat">Astro Delover</h1>
        <img src="https://img.icons8.com/ios-filled/100/anime.png" alt="anime" class="profile-icon animate__animated animate__fadeInDown"/>
        <p>User Info #Astro (http://t.me/astrozdev) - 8150119370</p>
        <p>{•} Name: Daniel</p>
        <p>{•} Year: ?</p>
        <p>{•} Refes: @AstrozRef</p>
        <p>{•} Country: Venezuela</p>
        <p>{•} Team: None</p>
        <p>{•} Note: I like to program, the programming languages ​​that I use are several among them</p>
        <p>{•} Python</p>
        <p>{•} PHP</p>
        <p>{•} Former seller of: @alphachecker1bot</p>
        <a href="#">Contáctame</a>
    </div>
</body>
</html>
