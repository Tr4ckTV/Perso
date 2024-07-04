@extends('layout.default')

@section('content')
<style>

    h1 {
        text-align: center;
    }

    .project-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }

    .project {
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: #00010c;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 80%;
        overflow: hidden;
        margin-bottom: 20px;
        padding: 20px;
    }

    .project h2 {
        margin-bottom: 10px;
    }

    .progress-bar-container {
        background-color: #444;
        border-radius: 5px;
        overflow: hidden;
        height: 30px;
        margin-top: 10px;
    }

    .progress-bar {
        height: 100%;
        border-radius: 5px;
    }

    .progress-bar.white {
        background-color: white;
    }

    .progress-bar.orange {
        background-color: orange;
    }

    .progress-bar.green {
        background-color: green;
    }
</style>

<h1>Mes Projets</h1>

<div class="project-grid">
    <div class="project">
        <h2>Site Web personnel</h2>
        <p>Site Web présentant mon parcour scolaire, </p>
        <div class="progress-bar-container">
            <div class="progress-bar green" style="width: 100%;"></div>
        </div>
    </div>

    <div class="project">
        <h2>Bot Discord LG</h2>
        <p>Bot discord qui permet de faire des parties de Loup-Garou de Tiercelieux, totalement automatisé de l'attributions des rôles jusqu'à la fin de la partie</p>
        <div class="progress-bar-container">
            <div class="progress-bar orange" style="width: 80%;"></div>
        </div>
    </div>

    <div class="project">
        <h2>Site pour une créatrice de bijoux</h2>
        <p>Site Vitrine/E-commerce</p>
        <div class="progress-bar-container">
            <div class="progress-bar green" style="width: 100%;"></div>
        </div>
    </div>
</div>

@endsection
