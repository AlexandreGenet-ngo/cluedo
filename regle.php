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
    $r1 = "Introduction"
    $r2 = "but du jeu"
    $r3 = "déroulement du jeu"
    $r4 = "comment gagner"
    $regle1 = "Le Cluedo est un jeu de déduction dans lequel les joueurs doivent découvrir qui a commis un
    meurtre, avec quelle arme, et dans quelle pièce du manoir." 
    $regle2 = "Le but est de parcourir les
    différentes pièces, émettre des hypothèses sur l'identité du meurtrier, l'arme utilisée, et l'endroit où le crime a été commis."
    $regle3 = " À chaque tour, coche information que tu as en main ou on te montre. chaque carte vue est une possibilité en moins, il ne reste que les 3 cartes de l'enveloppe.
    Le joueur formule des hypothèses et reçoit des indices pour affiner ses suppositions."
    $regle4 = "Trouver le coupable, l'arme et la pièce avant les autres. Le joueur remporte la partie s’il devine correctement la combinaison (personnage, arme, pièce).";
    echo "<h2>".$r1."\n"."</h2>";
    echo "<h3>".$regle1."\n"."</h3>";
    echo "<h2>".$r2."\n"."</h2>";
    echo "<h3>".$regles2."\n"."</h3>";
    echo "<h2>".$r3."\n"."</h2>";
    echo "<h3>".$regle3."\n"."</h3>";
    echo "<h2>".$r4."\n"."</h2>";
    echo "<h3>".$regle4."\n"."</h3>";
    ?>
    <nav>
        <a href="index.php?page=acceuil">Accueil<br></a>
    </nav>
</body>
</html>
