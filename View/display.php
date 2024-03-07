<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function DisplayLivres(string $nom, array $listeLivres) {
    foreach ($listeLivres as $livre) {
        echo "Titre : " . $livre->getTitre() . "<br>";
        echo "Genre : " . $livre->getGenre() . "<br>";
        echo "Nombre de pages : " . $livre->getNbpage() . "<br>";
        echo "Prix : " . $livre->getPrix() . "€<br>";
        echo "<br>";
    }
}

?>
</body>
</html>
