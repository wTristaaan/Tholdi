<?php
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

    $code = $_SESSION['user']['code'];
    $codeReserve = recuperationCodeResevations($code);
    creerReserver($codeReserve);
    $conteneurPanier = $_SESSION['panier'];
    $totalDevis = tarificationDevis();
    $test = sizeof($_SESSION['panier']);

        for($y = 0; $y < $test + 1 ; $y++){
            unset($_SESSION['panier'][$y]);
        }


header("location: index.php");

