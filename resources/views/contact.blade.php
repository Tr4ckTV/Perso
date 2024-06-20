@extends('layout.default')

@section('content')
<style>

    .contact-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 70vh;
        background-color: #000000;
        color: #FFFFFF;
        padding: 20px;
    }

    .contact-info {
        margin-bottom: 200px;
        text-align: center;
    }

    .contact-item {
        margin: 10px 0;
        font-size: 20px;
    }

    .contact-grid {
        display: flex;
        justify-content: space-around;
        width: 100%;
    }

    .contact-box {
        background-color: #1a1a1a;
        border: 1px solid #FFFFFF;
        padding: 10px;
        width: 30%;
        text-align: center;
        margin-right: 5px;
        margin-left: 5px
    }

    .contact-box h2 {
        margin-bottom: 80px;
    }

    .contact-box p {
        margin: 5px 0;
    }

    .price {
        color: #FFD700;
    }

    .contact-link {
        color: #00a2ff;
        text-decoration: underline;
    }
</style>

<div class="contact-container">
    <div class="contact-info">
        <div class="contact-item">Email: theogregoire.webdev@gmail.com</div>
        <div class="contact-item">Téléphone: (+32) 470 21 08 01</div>
    </div>
    <div class="contact-grid">
        <div class="contact-box">
            <h2>Cours particulier</h2>
            <p>Math</p>
            <p>Sciences</p><br>
            <p class="price">13€/h <br>
            Première heure offerte</p>
        </div>
        <div class="contact-box">
            <h2>Development</h2>
            <p>Web</p>
            <p>Application</p><br>
            <p class="price">Prix variable</p>
        </div>
        <div class="contact-box">
            <h2>Stream</h2>
            <p><a href="https://www.twitch.tv/tr4cktv_" class="contact-link">Mon Twitch</a></p><br><br>
            <p class="price">Gratuit</p>
        </div>
    </div>
</div>
@endsection
