<?php

$bdd_fichier = 'cluedp.db';

$sqlite = new SQLite3($bdd_fichier);

$sql = 'SELECT*FROM piece';
$sql = 'INNER JOIN portes ON portes.id_piece1=pieces.id_piece OR portes.id_piece2=pieces.id_piece';
$sql = 'WHERE id = RANDOM()';
$requete = $sqlite -> prepare($sql);	
if (isset($_PERSONNAGES['tirer'])) {
    $sql = "SELECT*FROM personnages ORDER BY RANDOM() LIMIT 1";
}
if (isset($_ARMES['tirer'])) {
    $sql = "SELECT*FROM armes ORDER BY RANDOM() LIMIT 1";
}
if (isset($_SALLE['tirer'])) {
    $sql = "SELECT*FROM piece ORDER BY RANDOM() LIMIT 1";
}
echo "<!DOCTYPE html>\n";		
echo "<html lang=\"fr\"><head><meta charset=\"UTF-8\">\n";
echo '<link rel="stylesheet" href="color.css">'."\n";
echo "<title>Pièces adjacentes à $piece</title>\n";
echo "</head>\n";
	
echo "<body>\n";
    echo '<form method="PERSONNAGES">';
        echo '<button type="submit" name="Personnage">';
            echo 'Personnages';
        echo '</button>';
        echo '<form method="ARMES">';
        echo '<button type="submit" name="armes">';
            echo 'Armes';
        echo '</button>';
        echo '<form method="SALLE">';
        echo '<button type="submit" name="piece">';
            echo 'piece';
        echo '</button>';
echo "</body>\n";
echo "</html>\n";
?>
