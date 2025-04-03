<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        @font-face {
            font-family: 'Edo';
            src: url('edo.woff2') format('woff2'),
                 url('edo.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-image: url('path_to_your_background_image.jpg'); /* Reemplazar con la ruta de la imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
            font-family: 'Courier New', monospace;
            background-size: 300% 300%;
            animation: fondoOscuro 8s ease infinite;
        }

        @keyframes fondoOscuro {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .card {
            background-color: rgba(31, 41, 55, 0.85);
            border-radius: 15px;
            width: 380px;
            overflow: hidden;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding-bottom: 20px;
        }

        .cover-photo {
            height: 180px;
            background-image: url('image/portada.jpg'); /* Reemplazar con la ruta de la portada */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .circle-buttons {
            position: absolute;
            right: 20px;
            top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 2;
        }

        .circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #1E2938;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
            overflow: hidden;
            color: white;
            opacity: 0.7;
        }

        .circle:hover {
            width: 120px;
            border-radius: 20px 20px 20px 20px;
            opacity: 1;
        }

        .circle i, .circle span {
            opacity: 1;
        }

        .circle span {
            display: none;
            margin-left: 8px;
            white-space: nowrap;
        }

        .circle:hover span {
            display: inline;
        }

        .profile-photo {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid #1F2937;
            background-image: url('image/capiPerfil.jpeg'); /* Reemplazar con la ruta del perfil */
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 90px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .info {
            font-family: 'Georgia', serif;
            color: #EDEDED;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            margin: 10px;
            position: relative;
        }

        .info h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .info p {
            font-size: 18px;
            line-height: 1.6;
        }

        .buttons-main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 15px 0;
        }

        .buttons-main button {
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
        }

        .buttons-main button:hover {
            background-color: #1E40AF;
            opacity: 1;
            transform: translateY(-2px);
        }

        .buttons-main button i {
            margin-right: 8px;
        }

        .skills, .team {
            font-size: 14px;
            color: #2563EB;
            margin-bottom: 10px;
        }

        .back-button {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0E1319;
            transition: background-color 0.3s;
            color: white;
            border: none;
            cursor: pointer;
            display: none;
            z-index: 2;
        }

        .back-button:hover {
            background-color: #1E40AF;
        }

        .skills-list {
            display: block;
            padding: 10px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            margin: 10px;
        }

        .skills-list h3 {
            color: #FFF;
            margin-bottom: 10px;
        }

        .skills-list ul {
            list-style: none;
            padding: 0;
        }

        .skills-list li {
            margin-bottom: 8px;
            align-items: center;
            display: flex;
        }

        .skills-list img {
            width: 24px;
            height: 24px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .info h2, .info p {
            font-family: 'Arial', sans-serif;
            color: #FFF;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
        }

        .animated-info {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes typing {
            0%, 100% { width: 0; }
            10%, 90% { width: 100%; }
        }

        @keyframes blink-caret {
            50% { border-color: transparent; }
        }

        .coding-animation {
            width: 20ch;
            animation: typing 4s steps(20, end) infinite, blink-caret 0.75s step-end infinite;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            margin-top: 10px;
        }

        .variable {
            color: #9CDCFE;
        }

        .function {
            color: #C586C0;
        }

        .string {
            color: #CE9178;
        }

        .keyword {
            color: #569CD6;
        }

        .comment {
            color: #6A9955;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #243B55;
        }

        body {
            font-family: 'Courier New', monospace;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            body {
                font-size: 14px;
            }
        }

        @media (max-width: 767px) {
            body {
                font-size: 12px;
            }
            .buttons-main button {
                padding: 8px 16px;
                font-size: 12px;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        #info-content {
            font-family: 'Edo', sans-serif;
            font-size: 24px;
        }

        .h1-title {
            font-family: 'Edo', sans-serif;
            font-size: 36px;
            color: #ffffff;
        }

        @keyframes rgb-color {
            0%, 100% { color: rgb(255, 0, 0); }
            33% { color: rgb(0, 255, 0); }
            66% { color: rgb(0, 0, 255); }
        }

        .team-content {
            animation: rgb-color 20s linear infinite;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="cover-photo">
            <div class="circle-buttons">
            </div>
        </div>
        <div class="profile-photo"></div>
        <div class="info">
            <h1 class="h1-title">Astro Delover</h1>
            <p id="info-content">User Info #Astro (http://t.me/astrozdev) - 8150119370</p>
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
    </div>
</body>
</html>
