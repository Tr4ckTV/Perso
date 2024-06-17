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
            padding: 10px 0;
            list-style-type: none;
        }
        .nav-links ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .nav-links ul li {
            margin-right: 20px; /* Espacement entre les éléments du menu */
        }
        .nav-links ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .nav-van {
            margin-left: auto; /* Pour aligner à droite */
            margin-right: auto;
        }
        .footer {
            background-color: #111;
            color: #ddd;
            padding: 20px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <a href="/">
                <li><a href="/"><span class="material-symbols-outlined">Home</span>
                    Home
                </a></li>
            </a>
        </div>
        <div class="nav-van">
            <nav class="nav-links">
                <ul>
                    <li><a href="/"><span class="material-symbols-outlined">
                        school
                        </span>Scolarité</a></li>
                    <li><a href="/"><span class="material-symbols-outlined">
                        sports_esports
                        </span>Passions</a></li>
                    <li><a href="/"><span class="material-symbols-outlined">
                        emoji_objects
                        </span>Projets</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2024 Mon Site. Tous droits réservés.</p>
    </div>
</body>
</html>
