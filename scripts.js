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
        <div class="info">
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
