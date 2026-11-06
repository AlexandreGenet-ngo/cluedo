<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>Règle du jeux</title>
</head>
<header>
    <?php 
    $titre = "Règle du Cluedo";
    echo "<h1>".$titre."</h1>";
    ?>
</header>
<body>
    <?php
    $regle = "Le Cluedo est un jeu de déduction dans lequel les joueurs doivent découvrir qui a commis un
    meurtre, avec quelle arme, et dans quelle pièce du manoir. Le but est de parcourir les
    différentes pièces, émettre des hypothèses sur l'identité du meurtrier, l'arme utilisée, et
    l'endroit où le crime a été commis. À chaque tour, le joueur formule des hypothèses et
    reçoit des indices pour affiner ses suppositions. Le joueur remporte la partie s’il devine
    correctement la combinaison (personnage, arme, pièce).";
    echo "<h3>".$regle."</h3>";
    ?>
    <nav>
        <a href="index.php?page=acceuil">Accueil<br></a>
    </nav>
</body>
</html>