<!-- prépare les variables inclut dans "post" afin d'appeler la fonction "creerCompte" -->
<?php
require_once 'inc/gestion.base.inc.php';
if(isset($_POST))
{
    $raisonSociale = htmlspecialchars($_POST['raisonSociale']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $cp = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars($_POST['ville']);
    $adrMel = htmlspecialchars($_POST['adrMel']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $contact = htmlspecialchars($_POST['contact']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $pays = htmlspecialchars($_POST['pays']);
    creerCompte($raisonSociale, $adresse, $cp, $ville,$adrMel,$telephone, $contact, $login, $mdp, $pays);
}
header("Location: index.php");