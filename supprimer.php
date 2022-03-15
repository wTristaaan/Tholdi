<?php
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

    $codeReservation = $_POST['codeReservation'];
    supprimerReservation($codeReservation);

header('Location: ./reservationClient.php');
