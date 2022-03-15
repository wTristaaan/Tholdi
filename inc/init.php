<?php
session_start();

include_once 'gestion.base.inc.php';
if (isset($_REQUEST["logout"])) {
    session_unset();
    header("Location: index.php");
}

if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $password = $_POST['mdp'];
    $_SESSION['panier'] = array();
    $_SESSION['reservation'] = array();


    $user = verification($login, $password);

    $_SESSION['user'] = $user;

}
