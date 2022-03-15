<!--initialise une session -->
<?php include_once 'init.php';?>
<!--initialise une session -->

<!--a inclure dans toutes les pages -->
<ul class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs">
        <li class="liNavbar"><a id="index" onclick="index()" href="index.php">Accueil</a></li>

    <!--s'affiche uniquement quand l'utilisateur est conncté -->
    <?php if (isset($_SESSION["user"]["login"])): ?>
        <li class="liNavbar"><a id="reservation" onclick="reservation()" href="reservation.php">Reserver</a></li><?php endif; ?>
    <!--s'affiche uniquement quand l'utilisateur est conncté -->

    <li class="liNavbar conteneurResponsive"><a id="pageConteneur" onclick="conteneur()" href="conteneur.php">Conteneur</a></li>
    <?php if (isset($_SESSION["user"]["login"])): ?>
        <li class="liNavbar"><a id="client" onclick="clientIndex()" href="espaceClient.php">Mon Espace</a></li>
    <?php endif; ?>

    <!--s'affiche uniquement quand l'utilisateur n'est pas conncté -->
    <?php if (!isset($_SESSION["user"]["login"])): ?>
        <li class="liNavbar"><a id="service" onclick="service()" href="service.php">Nos services</a></li>
        <li class="liNavbar"><a id="connexion" onclick="connexion()" href="connexion.php">Espace membre</a></li><?php endif; ?>
    <!--s'affiche uniquement quand l'utilisateur n'est pas conncté -->

    <?php if (isset($_SESSION["user"]["login"])): ?>
        <li class="row liResponsive" style="position: relative; left: 72%; top: 10%;">
            <p class="lip">Bonjour ! <?php echo $_SESSION["user"]["login"]; ?></p>
            <input class="imageResponsive" style="margin: 5%" width="10%" height="10%" type="image" src="img/logout.png" onclick="window.location.href = '<?php echo $_SERVER["PHP_SELF"]; ?>?logout';" alt="Logout"/>
        </li>

    <?php endif;?>

</ul>
