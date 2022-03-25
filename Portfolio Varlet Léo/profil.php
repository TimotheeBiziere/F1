<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Portfolio; Léo; Varlet; BTS SIO; Informatique; élève">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="CSS/stylePortfolio.css">

    <title>Portfolio de Léo Varlet - BTS SIO</title>
</head>
<body>
<header><h1> Bienvenue sur mon portfolio ! </h1> </br>
    <h2> Léo Varlet </h2>
</header>

<nav>
    <ul>
        <li class="deroulant"><a href="accueil.html">Accueil &ensp;</a>
            <ul class="sous">
                <li><a href="#">Profil</a></li>
                <li><a href="SIO.php">BTS SIO</a></li>
            </ul>
        </li>
        <li><a href="competences.php">Mes compétences et Expériences professionnelles &ensp;</a>
        </li>
        <li><a href="contact.php">Contact &ensp;</a>
        <li><a href="mentions.php">Mentions légales &ensp;</a>
    </ul>
</nav>

<p><img src="image/profil.jpg" width="15%" height="100%"></p>

<p1> Introduction <br></p1>
<paraIntro> Je m'appelle Léo Varlet, je suis un etudiant en première année de BTS SIO au Lycée Saint-Remi à Amiens. <br>
    Etant armé de mon BAC général suite à la reforme, je prévois de faire l'option SLAM et de faire une licence pro
    après ce BTS de 2 ans. <br>
    Je suis intéressé dans les jeux vidéos et la musique, et je reste à jour sur toutes les nouvelles informations de
    technologie. <br>
    Mon projet est de devenir programmeur. <br>
    <a href="Documentation/CV Léo Varlet.pdf" download="CV Léo Varlet.pdf" target="_blank"> Télécharger mon CV ici </a>
    <br>
    <embed src="Documentation/CV Léo Varlet.pdf" width="600" height="400">
</paraIntro>
<br>
<br>
</body>
<?php
require "footer.html";
?>
</html>