<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    /* Styles CSS existants */
    body {
      margin: 0;
      padding: 0;
      background-color: #000123;
      color: white;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    header {
      margin-bottom: 40px;
    }

    h1 {
      font-size: 2.5em;
      margin: 0;
    }

    h2 {
      font-size: 1.8em;
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .curve-container {
      display: flex;
      justify-content: space-between;
      margin-top: 200px;
    }

    .bubble {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1em;
      opacity: 0;
      animation: bubble-animation 5s forwards;
      text-decoration: none;
    }

    .bubble .content {
      width: 100%;
      height: 100%;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      position: relative;
      text-align: center;
    }

    .bubble:hover .content {
      transform: rotateY(180deg);
    }

    .bubble .front, .bubble .back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bubble .front {
      background-color: #ffffff;
      color: #000123;
      transform: rotateY(0deg);
    }

    .bubble .back {
      background-color: #000123;
      color: #ffffff;
      transform: rotateY(180deg);
    }

    .bubble .material-symbols-outlined {
        font-size: 50px;
    }

    img {
      border-radius: 10px;
    }

    @keyframes bubble-animation {
      0% {
        transform: translateY(10px) scale(0);
        opacity: 0;
      }
      100% {
        transform: translateY(0) scale(2);
        opacity: 1;
      }
    }

    /* Nouveaux styles pour le fond dynamique */
    html, body {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .container {
      width: 100%;
      height: 100%;
      position: relative;
    }

    .background {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      width: 100%;
      height: 100%;
      mask-image: radial-gradient(white 0%, white 30%, transparent 80%, transparent);
    }

    .circle-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .circle {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      mix-blend-mode: screen;
      background-image: radial-gradient(hsl(180, 100%, 80%), hsl(180, 100%, 80%) 10%, hsla(180, 100%, 80%, 0) 56%);
      position: absolute;
      bottom: -10%;
      left: calc(50% - 10px);
      animation: fade-frames 15s infinite, scale-animation 15s infinite;
      z-index: -1;
    }

    @keyframes fade-frames {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0.4;
      }

      100% {
        opacity: 0.85;
      }
    }

    @keyframes scale-animation {
      0% {
        transform: translateY(0vh) scale3d(2.2, 2.2, 1);
      }
      50% {
        transform: translateY(-55vh) scale3d(0.4, 0.4, 1);
      }
      100% {
        transform: translateY(-110vh) scale3d(2.2, 2.2, 1);
      }
    }

    .message {
      position: absolute;
      right: 20px;
      bottom: 10px;
      color: white;
      font-family: "Josefin Slab", serif;
      line-height: 27px;
      font-size: 18px;
      text-align: right;
      pointer-events: none;
      animation: message-frames 1.5s ease 5s forwards;
      opacity: 0;
    }

    @keyframes message-frames {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
<div class="circle-container" id="circleContainer">
  <div class="container">
    <header>
      <h1>GREGOIRE Théo</h1>
      <h2>23 ans</h2>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_%28civil%29.svg/1200px-Flag_of_Belgium_%28civil%29.svg.png" alt="Drapeau de la Belgique" width="100">
    </header>
    <div class="curve-container">
      <a href="scolarite" class="bubble" id="bubble1">
        <div class="content">
          <div class="front"><span class="material-symbols-outlined">school</span></div>
          <div class="back">Scolarité</div>
        </div>
      </a>
      <a href="passions" class="bubble" id="bubble2">
        <div class="content">
          <div class="front"><span class="material-symbols-outlined">sports_esports</span></div>
          <div class="back">Passions</div>
        </div>
      </a>
      <a href="projets" class="bubble" id="bubble3">
        <div class="content">
          <div class="front"><span class="material-symbols-outlined">emoji_objects</span></div>
          <div class="back">Projets</div>
        </div>
      </a>
    </div>
  </div>

  <!-- Éléments de fond dynamique -->
  <div class="message">"C'est l'innovation qui différencie les leaders des suiveurs" <i>Steve Jobs</i></div>
</div>
  <script>
    // JavaScript pour générer les cercles
    const circleContainer = document.getElementById('circleContainer');
    const particleNum = 400;

    for (let i = 0; i < particleNum; i++) {
      const circle = document.createElement('div');
      circle.className = 'circle';
      circle.style.width = `${Math.random() * 20 + 5}px`;
      circle.style.height = circle.style.width;
      circle.style.left = `${Math.random() * 100}%`;
      circle.style.animationDelay = `${Math.random() * 50000}ms`;

      circleContainer.appendChild(circle);
    }
  </script>
</body>
</html>
