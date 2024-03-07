<?php
declare(strict_types=1);

require_once "View/display.php";

function auteur()
{
    $kenFollet = new Auteur("Ken", "Follet");

    $kenFollet->addLivre(new Livre("Les Piliers de la Terre", "Roman", 350, 12.9));
    $kenFollet->addLivre(new Livre("Un Monde sans Fin", "Roman", 288, 18.5));
    $kenFollet->addLivre(new Livre("La Chute des Géants", "Roman", 310, 23));

    DisplayLivres($kenFollet->getNom(), $kenFollet->getListeLivres());

    $kenFollet->textOutput($kenFollet->getListeLivres(), "kenFollet.txt");
    // $listeLivres = $kenFollet->getListeLivres();
    // $kenFollet->textInput($listeLivres, "kenFollet.txt");

}

function unserialize2() {
    $kenFollet = new Auteur("Ken", "Follet");
    $listeLivres = [];
    $kenFollet->textInput($listeLivres, "kenFollet.txt");
    echo "Liste des livres de Ken Follet après désérialisation : <br>";
    print_r($listeLivres);  
}

?>
