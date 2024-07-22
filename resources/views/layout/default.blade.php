<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        body {
            background-color: #000123;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            list-style-type: none;
            border-bottom: #ddd solid 2px;
        }
        .navbar-logo {
            margin-right: auto;
            padding: 10px;
        }
        .navbar-logo .material-symbols-outlined {
            font-size: 70px;
            vertical-align: middle;
            color: white;
            transition: color 0.3s ease;
        }
        .navbar-logo .material-symbols-outlined:hover {
            color: orange;
        }
        .navbar-logo .material-symbols-outlined:visited {
            color: white;
        }
        .navbar-logo .material-symbols-outlined:visited:hover {
            color: orange;
        }
        .nav-links {
            margin-right: auto;
        }
        .nav-links ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .nav-links ul li {
            margin-right: 250px;
            text-align: center;
        }
        .nav-links ul li:last-child {
            margin-right: 0;
        }
        .nav-links ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .nav-links ul li a:hover {
            color: orange;
        }
        .nav-links ul li a:visited {
            color: white;
        }
        .nav-links ul li a:visited:hover {
            color: orange;
        }
        .nav-links ul li a .material-symbols-outlined {
            font-size: 50px;
            margin-bottom: 5px;
        }
        .contact a {
            color: white;
            text-decoration: none;
            border: 2px solid white;
            padding: 10px 20px;
            border-radius: 20px;
            transition: border-color 0.3s ease, color 0.3s ease;
        }
        .contact a:hover {
            color: orange;
            border-color: orange;
        }
        footer {
            background-color: #111;
            color: #ddd;
            padding: 20px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 997px) {
            .logo {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .nav-links {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .nav-links ul {
                flex-direction: column;
                align-items: center;
            }
            .nav-links ul li {
                margin-right: 0;
                margin-bottom: 20px;
            }
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            .contact {
                margin-top: 20px;
                width: 100%;
                text-align: center;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            .nav-links {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .nav-links ul {
                flex-direction: column;
                align-items: center;
            }
            .nav-links ul li {
                margin-right: 0;
                margin-bottom: 10px;
            }
            .navbar-logo .material-symbols-outlined {
                font-size: 50px;
            }
            .nav-links ul li a .material-symbols-outlined {
                font-size: 30px;
            }
            .nav-links ul li a {
                font-size: 14px;
            }
            .contact a {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <a href="{{ route('home') }}">
                <span class="material-symbols-outlined">home</span>
            </a>
        </div>
        <nav class="nav-links">
            <ul>
                <li><a href="{{ route('scolarite') }}"><span class="material-symbols-outlined">school</span><br>Scolarité</a></li>
                <li><a href="{{ route('passions') }}"><span class="material-symbols-outlined">sports_esports</span><br>Passions</a></li>
                <li><a href="{{ route('projets') }}"><span class="material-symbols-outlined">emoji_objects</span><br>Projets</a></li>
            </ul>
        </nav>
        <div class="contact">
            <a href="{{ route('contact') }}">
                Me contacter ⮕
            </a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
<footer>
    <p>&copy; 2024 Mon Site. Tous droits réservés.</p>
</footer>
</html>
