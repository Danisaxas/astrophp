<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
            background-image: url('path_to_your_background_image.jpg');
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
            background-image: url('image/portada.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            border-radius: 15px 15px 0 0;
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
            background-image: url('image/capiPerfil.jpeg');
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
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
            background-color: #1E3A8A;
            border: none;
            border-radius: 20px 20px 20px 20px;
            color: white;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            cursor: pointer;
            opacity: 0.7;
            min-width: 48px;
            padding: 12px;
            font-size: 12px;
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
            display: none;
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
    <script>
        function updateDynamicInfo(contentHtml) {
            var dynamicInfo = document.querySelector('.dynamic-info');
            dynamicInfo.innerHTML = contentHtml;
            dynamicInfo.style.display = 'block';
        }

        function bindButtonEvents() {
            document.getElementById('userInfoBtn').addEventListener('click', function() {
                var userInfoHtml = `
                    <div class="info animated-info">
                        <button class="back-button" onclick="resetCard()"><i class="fas fa-arrow-left"></i></button>
                        <h2>Nombre: Minos</h2>
                        <p>Usuario: @MinosTbug</p>
                        <p>ID: [6712112939]</p>
                        <p>Edad: -18</p>
                        <p>BestFriend: Boss, Kenny</p>
                        <p>💖:Vicky</p>
                    </div>
                `;
                updateDynamicInfo(userInfoHtml);
                document.querySelector('.back-button').style.display = 'flex';
            });

            document.getElementById('skillsBtn').addEventListener('click', function() {
                var skillsHtml = `
                    <div class="info animated-info">
                        <button class="back-button" onclick="resetCard()"><i class="fas fa-arrow-left"></i></button>
                        <h2>Habilidades</h2>
                        <div class="skills-list" id="skillsList" style="display: block;">
                            <ul>
                                <li><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP">PHP</li>
                                <li><img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">Python</li>
                                <li><img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++">C++</li>
                            </ul>
                        </div>
                    </div>
                `;
                updateDynamicInfo(skillsHtml);
                document.querySelector('.back-button').style.display = 'flex';
            });

            document.getElementById('teamsBtn').addEventListener('click', function() {
                var teamsHtml = `
                    <div class="info animated-info">
                        <button class="back-button" onclick="resetCard()"><i class="fas fa-arrow-left"></i></button>
                        <h2>Teams</h2>
                        <p class="team-content">明絵 𝙌𝙪𝙖𝙘𝙠.𝙄𝙣𝙘</p>
                        <p class="team-content">𝘿𝙎𝙓 [危險]</p>
                    </div>
                `;
                updateDynamicInfo(teamsHtml);
                document.querySelector('.back-button').style.display = 'flex';
            });
        }

        function resetCard() {
            var originalHtml = `
                <div class="cover-photo"></div>
                <div class="info">
                    <h2 class="h1-title">MinoTBug</h2>
                    <p>@MinoTbug</p>
                    <div class="buttons-main">
                        <a href="https://t.me/Astrozdev"><button><img src="https://img.icons8.com/?size=100&id=lUktdBVdL4Kb&format=png&color=000000" >Telegram</button></a>
                        <a href="#"><button><img src="https://img.icons8.com/?size=100&id=77&format=png&color=000000" >Info</button></a>
                        <a href="https://github.com/Danisaxas"><button><img src="https://img.icons8.com/?size=100&id=106562&format=png&color=000000" >GitHub</button></a>
                    </div>
                </div>
            `;
            updateDynamicInfo(originalHtml);
            document.querySelector('.back-button').style.display = 'none';
            bindButtonEvents();
        }

        bindButtonEvents();

        const codeSnippets = [
            "<span class='variable'>$variable</span> = <span class='string'>'PHP'</span>;",
            "echo <span class='variable'>$variable</span;",
            "function <span class='function'>test</span>() { return <span class='keyword'>true</span>; }",
            "if (<span class='variable'>$variable</span> === <span class='string'>'PHP'</span>) { echo <span class='string'>'Correcto!'</span>; }",
            "<span class='comment'>// Iterar sobre un array</span>",
            "<span class='variable'>$arr</span> = [<span class='string'>'PHP'</span>, <span class='string'>'HTML'</span>, <span class='string'>'CSS'</span>];",
            "foreach (<span class='variable'>$arr</span> as <span class='variable'>$lang</span>) { echo <span class='variable'>$lang</span>; }",
            "<span class='variable'>$i</span> = 0; while (<span class='variable'>$i</span> < 10) { echo <span class='variable'>$i</span>++; }",
            "function <span class='function'>suma</span>(<span class='variable'>$a</span>, <span class='variable'>$b</span>) { return <span class='variable'>$a</span> + <span class='variable'>$b</span>; }",
            "echo <span class='function'>suma</span>(5, 3);",
            "<span class='variable'>$edad</span> = 20; echo (<span class='variable'>$edad</span> >= 18) ? <span class='string'>'Mayor de edad'</span> : <span class='string'>'Menor de edad'</span>;",
            "try { throw new Exception(<span class='string'>'Error'</span>); } catch (Exception <span class='variable'>$e</span>) { echo <span class='variable'>$e</span>->getMessage(); }",
            "class <span class='function'>Persona</span> { public <span class='variable'>$nombre</span>; function __construct(<span class='variable'>$nombre</span>) { <span class='variable'>$this</span>->nombre = <span class='variable'>$nombre</span>; } }",
            "<span class='variable'>$persona</span> = new <span class='function'>Persona</span>(<span class='string'>'Juan'</span>); echo <span class='variable'>$persona</span>->nombre;",
            "include <span class='string'>'archivo.php'</span>;",
            "header(<span class='string'>'Content-Type: application/json'</span>);",
            "array_map(function(<span class='variable'>$item</span>) { return <span class='variable'>$item</span> * 2; }, [1, 2, 3]);",
            "json_encode(['nombre' => <span class='string'>'Ana'</span>, 'edad' => 25]);",
            "preg_match(<span class='string'>'/^test/'</span>, <span class='string'>'testando'</span>, <span class='variable'>$matches</span>); print_r(<span class='variable'>$matches</span>);",
            "date_default_timezone_set(<span class='string'>'America/New_York'</span>); echo date(<span class='string'>'Y-m-d H:i:s'</span>);",
            "file_put_contents(<span class='string'>'log.txt'</span>, <span class='string'>'Registro de error'</span>, FILE_APPEND);"
        ];
        let currentSnippet = 0;

        function changeCodeSnippet() {
            const codingAnimation = document.querySelector('.coding-animation');
            codingAnimation.innerHTML = codeSnippets[currentSnippet];
            currentSnippet = (currentSnippet + 1) % codeSnippets.length;
        }

        setInterval(changeCodeSnippet, 4000);

        particlesJS("particles-js", {
            particles: {
                number: { value: 50 },
                color: { value: "#ffffff" },
                shape: {
                    type: "circle",
                    stroke: { width: 0, color: "#000000" }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: { enable: false }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: { enable: false }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: { enable: false, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 400, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                    repulse: { distance: 200, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 }
                }
            },
            retina_detect: true
        });

        var profileImagePath = 'image/capiPerfil.jpeg';
        var coverImagePath = 'image/portada.jpg';

        window.onload = function() {
            document.querySelector('.profile-photo').style.backgroundImage = 'url(' + profileImagePath + ')';
            document.querySelector('.cover-photo').style.backgroundImage = 'url(' + coverImagePath + ')';
        };
    </script>
</head>
<body>
    
</body>
</html>
