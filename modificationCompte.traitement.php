<?php
include_once 'inc/init.php';
include_once 'inc/gestion.base.inc.php';

if(isset($_POST['loginClient']) && isset($_POST['mdpClient'])) {
    $login = $_POST["loginClient"];
    $mdp = $_POST["mdpClient"];
    $pdo = gestionnaireDeConnexion();


    if ($pdo != null) {
        $loginModif = $pdo->quote($login);

        $mdpModif = $pdo->quote($mdp);


        $lastLogin = $_SESSION["user"]["login"];
        $lastLogin = $pdo->quote($lastLogin);

        $lastMdp = $_SESSION["user"]["mdp"];
        $lastMdp = $pdo->quote($lastMdp);

        $req = "update utilisateur set login = $loginModif,mdp = $mdpModif WHERE login=$lastLogin AND mdp=$lastMdp";
        $prep = $pdo->prepare($req);
        $prep->execute();
       
    }


    $_SESSION['user']['login'] = $login;
    $_SESSION['user']['mdp'] = $mdp;
}


header("location: espaceClient.php");