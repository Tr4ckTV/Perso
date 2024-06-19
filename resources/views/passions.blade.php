@extends('layout.default')

@section('content')
<style>
    /* style.css */

    h1 {
        text-align: center;
    }

    .passion-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }

    .passion {
        position: relative;
        display: flex;
        background-color: #00010c;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 80%;
        height: 400px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .passion-content {
        flex: 1;
        padding: 20px;
        color: white;
        z-index: 2;
    }

    .passion-image {
        flex: 1;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .passion-image::before {
        content: '';
        position: absolute;
        top: 0;
        right: 80%;
        width: 60%;
        height: 100%;
        background-color: #00010c;
        z-index: 2;
        transform: skew(-20deg);
    }

    .passion img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>


    <h1>Mes Passions</h1>

    <div class="passion-grid">
        <div class="passion">
            <div class="passion-content">
                <h2>Les jeux-vidéo</h2>
                <p>Ma passion pour les jeux vidéo remonte à mon enfance, lorsque j'ai commencé à jouer sur la PS1 de mes parents avec des titres comme Rayman et Spyro.</p>
                <p>Aujourd'hui, le domaine du jeu vidéo est largement reconnu comme un nouvel art. Avec l'évolution constante des graphismes, les jeux deviennent de plus en plus esthétiquement impressionnants.</p>
                <p>En outre, de nombreux jeux offrent des avantages variés, allant de l'utilisation stratégique à la stimulation de l'imagination.</p>
            </div>
            <div class="passion-image">
                <img src="/public/images/passion1.jpg" alt="Ma passion des jeux vidéos">
            </div>
        </div>
        <div class="passion">
            <div class="passion-content">
                <h2>Les Sciences : Chimie et Biologie</h2>
                <p>Ma passion pour les sciences, en particulier la chimie et la biologie, découle de ma fascination pour la façon dont ces disciplines permettent à l'humanité de progresser.</p>
                <p>La chimie explore les mystères des éléments et des composés, révélant des solutions innovantes pour des défis allant de la santé à l'environnement.</p>
                <p>Quant à la biologie, elle nous plonge dans le monde fascinant de la vie et de ses processus. De la structure complexe des cellules à l'écologie des écosystèmes, la biologie nous aide à comprendre notre propre existence ainsi que celle des autres formes de vie sur Terre.</p>
                <p>Ces sciences ne sont pas seulement des domaines d'étude, mais des moteurs de progrès qui façonnent notre avenir. </p>
            </div>
            <div class="passion-image">
                <img src="/public/images/passion2.jpg" alt="Ma passion des sciences">
            </div>
        </div>
        <div class="passion">
            <div class="passion-content">
                <h2>Jeux de Logique et Puzzles</h2>
                <p>Ces jeux sont bien plus que de simples divertissements : ils sollicitent notre réflexion, notre capacité à résoudre des problèmes complexes et à trouver des solutions créatives.</p>
                <p>En plus de leur aspect ludique, ces jeux sont reconnus pour leurs bienfaits sur la santé cognitive. En gardant notre cerveau actif et engagé, ils contribuent à maintenir et à améliorer notre quotient intellectuel (QI) au fil du temps. Ils favorisent également la concentration, la patience et la capacité de raisonnement stratégique.</p>
            </div>
            <div class="passion-image">
                <img src="/public/images/passion3.jpg" alt="Ma passion de la logique">
            </div>
        </div>
    </div>

@endsection
