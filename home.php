<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            max-width: 400px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #4CAF50;
            text-align: center;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 1.2em;
        }
        a:hover {
            color: #0056b3;
        }
        .profile-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* SVG inline como background */
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M50 5a45 45 0 1 0 0 90 45 45 0 0 0 0-90z' fill='%23000'/%3E%3Cpath d='M73 73c-2.3-7-6-13.5-11-18-4.5-4-10-7-16-7s-11.5 3-16 7c-5 4.5-8.7 11-11 18a39 39 0 0 0 74 0z' fill='%23fff'/%3E%3Ccircle cx='50' cy='35' r='10' fill='%23fff'/%3E%3C/svg%3E");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Astro Delover</h1>
        <div class="profile-icon"></div>
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
    </div>
</body>
</html>
