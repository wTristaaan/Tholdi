<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>
<!--inclusion du header et de la navbar -->

<div class="container">
    <!--Parcours la liste des conteneurs stocké dans la fonction listeConteneurs()-->
    <div class="row" style="margin: 2%">
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 1-->
                <?php if ($conteneurs["numTypeContainer"] == 1) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/smallDry.jpg" alt="Small dry conteneur" style="max-height: 30%">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>

                            <?php
                            if (isset($_SESSION["user"]["login"])){ ?>
                                <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 1-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 2-->
                <?php if ($conteneurs["numTypeContainer"] == 2) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/mediumDry.jpg" alt="Small dry conteneur" style="max-height: 30%">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 2-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 3-->
                <?php if ($conteneurs["numTypeContainer"] == 3) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/hightCube.jpg" alt="Small dry conteneur" style="max-height: 30%">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 3-->
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row" style="margin: 2%">
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 4-->
                <?php if ($conteneurs["numTypeContainer"] == 4) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/smallFlat.jpg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 4-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 5-->
                <?php if ($conteneurs["numTypeContainer"] == 5) { ?>
                    <div id="table" class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/mediumFlat.jpg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 5-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 6-->
                <?php if ($conteneurs["numTypeContainer"] == 6) { ?>
                    <div class="card" style="max-width: 18rem;  height: 540px">
                        <img class="card-img-top" src="img/smallOpen.jpg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                            if (isset($_SESSION["user"]["login"])){ ?>
                                <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 6-->
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row" style="margin: 2%">
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 7-->
                <?php if ($conteneurs["numTypeContainer"] == 7) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/mediumOpen.jpeg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 7-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 8-->
                <?php if ($conteneurs["numTypeContainer"] == 8) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px">
                        <img class="card-img-top" src="img/smallReefer.jpg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                if($conteneurs["poidsCont"] == null){

                                }else{ ?>
                                    Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 8-->
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php
            $listeConteneurs = listeConteneurs();
            foreach ($listeConteneurs as $conteneurs):?>
                <!--Conteneur 9-->
                <?php if ($conteneurs["numTypeContainer"] == 9) { ?>
                    <div class="card" style="max-width: 18rem; height: 540px" >
                        <img class="card-img-top" src="img/mediumReefer.jpeg" style="max-height: 30%" alt="Small dry conteneur">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $conteneurs["libelleTypeContainer"] ?></h5>
                            <p class="card-text" style="height: 215px">Numéro du conteneur : <?php echo $conteneurs["numTypeContainer"] ?><br>
                                Type de conteneur : <?php echo $conteneurs["codeTypeContainer"] ?><br>
                                Longueur : <?php echo $conteneurs["longueurCont"] ?><br>
                                Largeur : <?php echo $conteneurs["largeurCont"] ?><br>
                                Hauteur : <?php echo $conteneurs["hauteurCont"] ?><br>
                                <?php
                                    if($conteneurs["poidsCont"] == null){

                                    }else{ ?>
                                        Poids: <?php echo $conteneurs["poidsCont"] ?><br>
                                    <?php } ?>
                                <?php
                                if($conteneurs["tare"] == null){

                                }else{ ?>
                                    Tare: <?php echo $conteneurs["tare"] ?><br>
                                <?php } ?>
                                <?php
                                if($conteneurs["capaciteDeCharge"] == null){

                                }else{ ?>
                                    Capacité de charge: <?php echo $conteneurs["capaciteDeCharge"] ?><br>
                                <?php } ?>
                            <?php
                                if (isset($_SESSION["user"]["login"])){ ?>
                                    <a href="reservation.php" class="btn btn-primary none">Reserver ?</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <!--Conteneur 9-->
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include_once 'inc/footer.inc.php' ?>

<script>
    document.getElementById('pageConteneur').className = 'active';
</script>
