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

    <title>Portfolio de Léo Varlet - Contact</title>
</head>
<body>
<header><h1> Contact </h1> </br>
</header>

<nav>
    <ul>
        <li class="deroulant"><a href="accueil.html">Accueil &ensp;</a>
            <ul class="sous">
                <li><a href="profil.php">Profil</a></li>
                <li><a href="SIO.php">BTS SIO</a></li>
            </ul>
        </li>
        <li><a href="competences.php">Mes compétences et Expériences professionnelles &ensp;</a>
        </li>
        <li><a href="#">Contact &ensp;</a>
        <li><a href="mentions.php">Mentions légales &ensp;</a>
    </ul>
</nav>
<br>
<p1> Contact</p1>
<p2> Email : leo.varlet@saint-remi.net</p2>
<p1> ou</p1>

<form action="https://submit-form.com/m2zfiM6L">
    <div class="col-md-3">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" id="email" name="email" required="">
        <div id="emailHelp" class="form-text" style="color:black"> On ne divulguera votre email à personne.</div>
    </div>

    <br>

    <div class="col-md-5">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Ecrivez votre message ici" required=""
                  rows="8"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<br>
<br>
<br>
<br>
<br>
</body>
<?php
require "footer.html";
?>
</html>