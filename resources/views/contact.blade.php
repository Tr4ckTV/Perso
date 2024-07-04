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
        background-color: #121212;
        color: #FFFFFF;
        padding: 40px;
        box-sizing: border-box;
    }

    .contact-info {
        margin-bottom: 40px;
        text-align: center;
    }

    .contact-item {
        margin: 10px 0;
        font-size: 18px;
        font-weight: 500;
    }

    .contact-grid {
        display: flex;
        justify-content: center;
        gap: 20px;
        width: 100%;
        max-width: 1200px;
        box-sizing: border-box;
    }

    .contact-box {
        background-color: #1f1f1f;
        border: 1px solid #333;
        border-radius: 10px;
        padding: 20px;
        width: 30%;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .contact-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    }

    .contact-box h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #FFD700;
        border-bottom: 2px solid #FFD700;
        padding-bottom: 10px;
    }

    .contact-box p {
        margin: 10px 0;
        font-size: 16px;
        color: #CCCCCC;
    }

    .price {
        color: #FFD700;
        font-weight: bold;
        font-size: 18px;
        margin-top: 20px;
    }

    .contact-link {
        color: #00a2ff;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .contact-link:hover {
        color: #0091e6;
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
            <p class="price">13€/h <br> Première heure offerte</p>
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
