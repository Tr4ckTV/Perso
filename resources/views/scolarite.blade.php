@extends('layout.default')

@section('content')
<style>/* CSS pour rendre la page de scolarité plus attrayante */

.content body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 20px;
    }

    .content h1 {
        text-align: center;
    }

    .content h2 {
        color: #a5a5a5;
        border-bottom: 2px solid #ccc;
        padding-bottom: 5px;
    }

    .content ul {
        list-style-type: none;
        padding: 0;
    }

    .content li {
        margin-bottom: 10px;
    }

    .content li:before {
        color: #666;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    .content h3 {
        margin-bottom: 5px;
        color: #007bff;
    }

    .content p {
        color: #666;
    }

    /* Style spécial pour les projets académiques */
    .content ul li h3 {
        color: #28a745;
    }

    .content ul li p {
        margin-top: 5px;
    }

    /* Responsive design pour les petits écrans */
    @media (max-width: 768px) {
        .content h1 {
            font-size: 28px;
        }
        .content h2 {
            font-size: 22px;
        }
        .content h3 {
            font-size: 18px;
        }
        .content p {
            font-size: 14px;
        }
    }

    </style>
    <div class="content">
    <h1>Scolarité</h1>
    <p>Bienvenue sur ma page de scolarité. Ici, vous trouverez toutes les informations concernant mon parcours académique.</p>

    <h2>Parcours scolaire</h2>
    <ul>
        <li>
            <h3>Collège Notre-Dame de Basse-Wavre (2013-2019)</h3>
            <p>Math 6 / Sciences 6</p>
        </li>
        <li>
            <h3>Gembloux Agro Bio-tech (2019-2022)</h3>
            <p>Sciences de l'ingénieur (orientation bioingénieur)</p>
        </li>
        <li>
            <h3>Ifosup Wavre (2022-2024)</h3>
            <p>BES Webdeveloper</p>
        </li>
    </ul>

    <h2>Autodidacte</h2>
    <ul>
        <li>Plusieurs langages de programmation</li>
        <li>Esperanto</li>
        <li>Math / Sciences</li>
    </ul>

    <h2>Compétences Acquises</h2>
    <ul>
        <li><h3>Programmation</h3>
            <p>Front-end et Back-end</p></li>
        <li><h3>Développement Web</h3>
            <p>HTML, CSS, JavaScript et PhP</p></li>
        <li><h3>Gestion de base de donnée</h3>
            <p>MySQL et PostgreSQL</p></li>
        <li><h3>Langage de programmation</h3>
            <p>C / C++ / C# / Python / Java</p></li>
        <li><h3>Utilisation de Frameworks</h3>
            <p>Laravel / Vue.js / Node.js / Symfony</p></li>
        <li><h3>Analyse de statistiques et calcul de probabilités</h3>
        <li><h3>Utilisation d'une méthode scientifique</h3>
    </ul>

    <h2>Projets Académiques</h2>
    <ul>
        <li>
            <h3>Pokedex</h3>
            <p>Site web consistant à l'imitation d'un Pokédex tiré du manga Pokémon</p>
        </li>
        <li>
            <h3>Fake Instagram</h3>
            <p>Réseau social avec toutes les fonctionnalités d'Instagram telles que les likes, le post de photos, la création de profil,...</p>
        </li>
        <li>
            <h3>Algorithme d'analyse statistique</h3>
            <p>Site web qui prend des données d'une API, puis via un algorithme, ressort des résultats de rentabilité</p>
        </li>
        <li>
            <h3>Stage en entreprise</h3>
            <p>Création d'une application windows à l'aide de Python + gestion du site web</p>
        </li>
        <li>
            <h3>Formulaire de satisfaction</h3>
            <p>Site destiné à des professeurs pour créer un formulaire de satisfaction et le transmettre aux élèves</p>
        </li>
    </ul>
</div>
@endsection
