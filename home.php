<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #243B55;
            color: #fff;
            transition: background-color 0.5s ease;
        }
        body:hover {
            background-color: #384e66;
        }
        .container {
            margin-top: 20px;
            margin-bottom: 20px;
            animation: fadeIn 1s ease, pulse 2s infinite alternate;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
            color: #FF6F61;
            text-align: center;
            letter-spacing: -0.02em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);
        }
        p {
            font-size: 1.15em;
            margin-bottom: 12px;
            line-height: 1.7;
            color: #fff;
        }
        a {
            color: #FFCB77;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: 600;
            transition: color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            padding: 8px 16px;
            border-radius: 25px;
            background-color: transparent;
            border: 2px solid #FFCB77;
        }
        a:hover {
            color: #fff;
            background-color: #FFCB77;
            transform: scale(1.05);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .profile-icon {
            width: 120px;
            height: 120px;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            background-image: url(https://img.icons8.com/ios-filled/100/anime.png);
            background-size: cover;
            background-repeat: no-repeat;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .profile-icon:hover {
            transform: scale(1.1);
        }

        .profile-photo {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid #1F2937;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 90px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            /* background-image: url(image/capiPerfil.jpeg);  Eliminado para usar URL externa o base64 */
            background-image: url(https://placehold.co/110x110/808080/FFFFFF?text=Profile);
        }

        .cover-photo {
            height: 180px;
            /* background-image: url(image/portada.jpg); Eliminado para usar URL externa o base64 */
            background-image: url(https://placehold.co/373x180/808080/FFFFFF?text=Cover+Photo);
            background-size: cover;
            background-position: center;
            position: relative;
            border-radius: 15px 15px 0 0;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.02);
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

        .card {
            background-color: rgba(31, 41, 55, 0.85);
            border-radius: 15px;
            width: 373.79px;
            height: 440.12px;
            overflow: hidden;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding-bottom: 20px;
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
            font-size: 15px;
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
    </style>
    <script>
        function resetCard() {
            var originalHtml = `
                <div class="cover-photo"></div>
                <div class="info">
                    <div class="profile-photo"></div>
                    <h2 class="h1-title">MinoTBug</h2>
                    <p>@MinoTbug</p>
                    <div class="buttons-main">
                        <button id="userInfoBtn"><i class="fas fa-info"></i> Info</button>
                        <button id="skillsBtn"><i class="fas fa-code"></i> Habilidades</button>
                        <button id="teamsBtn"><i class="fas fa-briefcase"></i> Teams</button>
                    </div>
                    <div class="coding-animation">
                        <span class="variable">$variable</span> = <span class="string">'PHP'</span>;
                    </div>
                </div>
                <div class="skills-list" id="skillsList" style="display: none;">
                    <h3>Habilidades</h3>
                    <ul>
                        <li><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP">PHP</li>
                        <li><img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">Python</li>
                        <li><img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++">C++</li>
                    </ul>
                </div>
            `;
            updateDynamicInfo(originalHtml);
            document.querySelector('.back-button').style.display = 'none';
            bindButtonEvents();
        }

        function updateDynamicInfo(html) {
            document.querySelector('.card').innerHTML = html;
        }

        function bindButtonEvents() {
            const userInfoBtn = document.getElementById('userInfoBtn');
            const skillsBtn = document.getElementById('skillsBtn');
            const teamsBtn = document.getElementById('teamsBtn');
            const skillsList = document.getElementById('skillsList');

            if (userInfoBtn) {
                userInfoBtn.addEventListener('click', () => {
                    alert('userInfoBtn clicked');
                });
            }
            if (skillsBtn) {
                skillsBtn.addEventListener('click', () => {
                    skillsList.style.display = skillsList.style.display === 'none' ? 'block' : 'none';
                });
            }
            if (teamsBtn) {
                teamsBtn.addEventListener('click', () => {
                    alert('teamsBtn clicked');
                });
            }
        }

        window.onload = function() {
            resetCard();
        };
    </script>
</head>
<body>
    <div class="container card">
    </div>
</body>
</html>
