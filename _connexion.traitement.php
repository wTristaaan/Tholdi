<?php
require_once 'inc/gestion.base.inc.php';
session_start();
if (isset($_POST['login']) && isset($_POST['mdp'])){

    $login = $_POST['login'];
    $password = $_POST['mdp'];

    $user = verification($login, $password);

    $_SESSION['user'] = $user;
    $_SESSION['panier'] = array();
    $_SESSION['reservation'] = array();

}
header("Location: index.php");