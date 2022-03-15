<?php
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

if(isset($_POST['nbConteneur']) && isset($_POST['numTypeContainer'])){
    $panier = [];
    $conteneurCourant = listeConteneursReserve($_POST['numTypeContainer']);
    $panier = $conteneurCourant;
    $panier['nbConteneur'] = $_POST['nbConteneur'];
    array_push($_SESSION['panier'], $panier);

}
header("location: ./reserverConteneur.php");