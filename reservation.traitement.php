<?php
include_once 'inc/gestion.base.inc.php';
include_once 'inc/init.php';

if (isset($_POST)){

    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];

    $durerTotaleReservation = abs(strtotime($dateFin) - strtotime($dateDebut));
    $years  = floor($durerTotaleReservation / (365 * 60 * 60 * 24));
    $months = floor(($durerTotaleReservation - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days   = floor(($durerTotaleReservation - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

    $totaleReservation = array();
    array_push($totaleReservation, $years, $months, $days);
    array_push($_SESSION['panier'], $totaleReservation);

    $volume = $_POST['volume'];
    $villeDepart = $_POST['numVilleDep'];
    $villeArriver = $_POST['numVillefin'];

    $strDateDebut = strtotime($dateDebut);
    $strDateFin = strtotime($dateFin);

    $today = date("m.d.y");
    $strToday = strtotime($today);

    $codeUtilisateur = $_SESSION['user']['code'];

    $dateDuJour = false;
    $dateSuperieure = false;

    if($strDateDebut > $strToday){
        $dateDuJour = true;
    }else{
        $_SESSION['reservation'] = 999;
        header("Location: ./reservation.php");
        $test = sizeof($_SESSION['panier']);
        for($y = 0; $y < $test + 1 ; $y++){
            unset($_SESSION['panier'][$y]);
        }
    }

    if($strDateDebut > $strDateFin){
        $_SESSION['reservation'] = 1;
        header("Location: ./reservation.php");
        $test = sizeof($_SESSION['panier']);
        for($y = 0; $y < $test + 1 ; $y++){
            unset($_SESSION['panier'][$y]);
        }

    }else{
        $dateSuperieure = true;
    }

    if($dateDuJour == true && $dateSuperieure == true){
        creerReservation($strDateDebut, $strDateFin, $strDateReservation, $volume, $villeDepart, $villeArriver, $codeUtilisateur);
        header("Location: reserverConteneur.php");
    }
}
