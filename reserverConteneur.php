<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php'; ?>
<!--inclusion du header et de la navbar -->

<?php
$code = array();
$codeDesConteneurs = array();
$nomDesConteneurs = array();
$nbDesConteneurs = array();
foreach($_SESSION['panier'] as $code){
    array_push($codeDesConteneurs, $code['codeTypeContainer']);
    array_push($nomDesConteneurs, $code['libelleTypeContainer']);
    array_push($nbDesConteneurs, $code['nbConteneur']);
}?>

<div class="container" style="margin-top: 5%;">
    <div id="reserverContainerBody">
        <div class="row" id="reserverContainerRow">
            <div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 2%">
                <div class="card cardResponsive" style="width: 35rem;">
                    <div class="card-body">
                        <h5 class="card-title">Reservation</h5>
                        <form method="POST" action="reservationConteneur.traitement.php">
                            <div>
                                <label for="numTypeContainer" style="color: black;">Type de conteneur : </label>
                                <select id="numTypeContainer" name="numTypeContainer" onchange="selector()">
                                    <option value="" disabled selected hidden name="" id="1">Selectionner un conteneur
                                    </option>
                                    <option value="1" name="smallD" id="1">Small Dry Freigh Container</option>
                                    <option value="2" name="mediumD" id="2">Medium Dry Freight Container</option>
                                    <option value="3" name="hightC" id="3">Hight Cube Dry Freight Container</option>
                                    <option value="4" name="smallF" id="4">Small Flat Rack Container</option>
                                    <option value="5" name="mediumF" id="5">Medium Flat Rack Container</option>
                                    <option value="6" name="smallO" id="6">Small Open Top Container</option>
                                    <option value="7" name="mediumO" id="7">Medium Open Top Container</option>
                                    <option value="8" name="smallR" id="8">Small Reefer Container</option>
                                    <option value="9" name="mediumR" id="9">Medium Reefer Container</option>
                                </select>
                            </div>
                            <div style="margin-bottom: 2%">
                                <label for="validationTooltip02" style="color: black">Nombre de conteneur : </label>
                                <label for="nbConteneur"></label>
                                <input type="number" min="1" class="form-control" name="nbConteneur" id="nbConteneur"
                                       placeholder="Saisir le nombre de conteneur" required>
                            </div>
                            <div style="display: flex; justify-content: center">
                                <button class="btn btn-primary" type="submit">Ajouter au panier !</button>
                            </div>
                            <div style="display: flex; justify-content: center; padding:2%">
                                <img src="img/asterisk.png"
                                     style="width: 2%; height:2%; position:relative; top:9px;right:2px">
                                <label style="color: black">: les champs sont requis</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="display: flex; justify-content: center">
                <form action="commande.traitement.php" method="post">
                    <div class="card cardResponsive" style="width: 35rem;">
                        <div class="card-body">
                            <h5 class="card-title">Reservation</h5>
                            <div>
                                <p style="color: black"><?php for ($i = 1; $i < sizeof($codeDesConteneurs); $i++) { ?>
                                        <?php echo 'Conteneur ', $i, ': ', $codeDesConteneurs[$i]; ?>
                                        <?php echo $nomDesConteneurs[$i]; ?>
                                        <?php echo 'x', $nbDesConteneurs[$i]; ?> <br>
                                    <?php } ?></p>
                            </div>
                            <div style="display: flex; justify-content: center">
                                <button class="btn btn-primary" type="submit">Commander</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="responsiveConteneur" id="conteneur"></div>
    </div>
</div>

<?php include_once 'inc/footer.inc.php' ?>

<script>
const nomDuConteneur =[];
const numTypeDuConteneur = [];
const codeConteneur = [];
const longueurConteneur = [];
const largeurConteneur = [];
const hauteurConteneur = [];
const poidsConteneur = [];
const tareConteneur = [];
const capaciteConteneur = [];

<?php
$listeConteneurs = listeConteneurs();
foreach ($listeConteneurs as $conteneurs):
    ?>
nomDuConteneur.push(<?php echo json_encode($conteneurs['libelleTypeContainer']); ?>);
numTypeDuConteneur.push(<?php echo json_encode($conteneurs["numTypeContainer"]); ?>);
codeConteneur.push(<?php echo json_encode ($conteneurs["codeTypeContainer"]); ?>);
longueurConteneur.push(<?php echo json_encode($conteneurs["longueurCont"]); ?>);
largeurConteneur.push( <?php echo json_encode($conteneurs["largeurCont"]); ?>);
hauteurConteneur.push(<?php echo json_encode($conteneurs["hauteurCont"]); ?>);
poidsConteneur.push(<?php echo json_encode($conteneurs["poidsCont"]); ?>);
tareConteneur.push(<?php echo json_encode($conteneurs["tare"]); ?>);
capaciteConteneur.push(<?php echo json_encode($conteneurs["capaciteDeCharge"]); ?>);
<?php endforeach; ?>

</script>

<script>
    document.getElementById('reservation').className = 'active';
</script>


