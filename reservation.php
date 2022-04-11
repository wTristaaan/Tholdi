<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>
<!--inclusion du header et de la navbar -->

<?php if ($_SESSION['reservation'] == 8) {
    echo "<script>alert(\"vous n'avez pas de reservation !\")</script>";
    $_SESSION['reservation'] = 9;
}
?>
<?php if ($_SESSION['reservation'] == 4) {
    echo "<script>alert(\"Vous ne pouvez pas sélectionner 2 fois le même port !\")</script>";
    $_SESSION['reservation'] = 9;
}
?>
<?php if ($_SESSION['reservation'] == 999) {
    echo "<script>alert(\"La date du début de réservation doit être supérieur à la date du jour !\")</script>";
    $_SESSION['reservation'] = 9;
}
?>
<?php if ($_SESSION['reservation'] == 1) {
    echo "<script>alert(\"La date de fin ne peut pas être inférieure à la date de début !\")</script>";
    $_SESSION['reservation'] = 9;
}
?>
<div class="container" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-12" style="display: flex; justify-content: center">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">Reservation</h5>
                    <form method="post" action="reservation.traitement.php">

                        <div style="margin-bottom: 2%">
                            <label for="validationTooltip02" style="color: black">Date de début reservation :</label>
                            <label for="dateDebut"></label>
                            <input type="date" class="form-control" name="dateDebut" id="dateDebut" placeholder="Date !"
                                   required>
                        </div>

                        <div style="margin-bottom: 2%">
                            <label for="validationTooltip02" style="color: black">Date fin de reservation :</label>
                            <label for="datefin"></label>
                            <input type="date" class="form-control" name="dateFin" id="datefin"
                                   placeholder="Date de fin" required>
                        </div>

                        <div style="margin-bottom: 2%">
                            <label for="validationTooltip02" style="color: black">Volume estimé : </label>
                            <label for="volume"></label>
                            <input type="number" class="form-control" name="volume" id="volume" placeholder="Volume"
                                   min="1" required>
                        </div>

                        <div style="margin-bottom: 5%; display: flex">
                            <div>
                                <label for="numVilleDep" style="color: black">Ville de départ :</label>
                                <select id="numVilleDep" name="numVilleDep" required>
                                    <option value="" disabled selected hidden name="0" id="1">Ville de départ !</option>
                                    <option value="1" name="1" id="1">Le Havre</option>
                                    <option value="2" name="2" id="2">Marseille</option>
                                    <option value="3" name="3" id="3">Gennevilliers</option>
                                    <option value="4" name="4" id="4">Anvers</option>
                                    <option value="5" name="5" id="5">Barcelone</option>
                                    <option value="6" name="6" id="6">Hambourg</option>
                                    <option value="7" name="7" id="7">Rotterdam</option>
                                </select>
                            </div>

                            <div>
                                <label for="numVillefin" style="color: black">Ville d'arriver :</label>
                                <select id="numVillefin" name="numVillefin" required>
                                    <option value="" disabled selected hidden name="0" id="1">Ville de d'arriver !
                                    </option>
                                    <option value="1" name="1" id="1">Le Havre</option>
                                    <option value="2" name="2" id="2">Marseille</option>
                                    <option value="3" name="3" id="3">Gennevilliers</option>
                                    <option value="4" name="4" id="4">Anvers</option>
                                    <option value="5" name="5" id="5">Barcelone</option>
                                    <option value="6" name="6" id="6">Hambourg</option>
                                    <option value="7" name="7" id="7">Rotterdam</option>
                                </select>
                            </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'inc/footer.inc.php' ?>
<script>
    document.getElementById('reservation').className = 'active';
</script>