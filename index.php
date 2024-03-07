<?php
session_start(); 

require('Menuprincipal.php');
require('controller/ctauteur.php');
require_once('./autoloader.php');
Autoloader::register();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'AfficherNbJoueur') {
        MonTPClassJoueur();
    }
    if ($_GET['action'] == 'LoadOnePilote') {
        LoadOnePilote();
    }

    if ($_GET['action'] == 'Heritage') {
        LoadOnePilote();
    }

    if ($_GET['action'] == 'aggregation') {
        auteur();
    }

    if ($_GET['action'] == 'unserialize') {
        unserialize2();
    }


}


/*?> ommis car PHP only */