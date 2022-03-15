<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>

<div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="display:flex; justify-content: center;">
                        <h5 class="card-title">Informations client</h5><br>
                    </div>
                    <div>
                        <form action="modificationCompte.traitement.php" method="post"
                              style="display:flex; justify-content: center; margin-bottom: 2%">
                            <div class="card" style="width: 25rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Modification du compte</h5>
                                    <div class="form-group">
                                        <label>
                                            <input name="loginClient" type="text" style="color:black"
                                                   placeholder="<?php echo $_SESSION['user']['login'] ?>">

                                        </label>

                                        <label>
                                            <input name="mdpClient" type="password" placeholder="Ancien mot de passe">
                                        </label>
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div style="display:flex; justify-content: center;">
                        <a href="reservationClient.php" class="btn btn-primary" style="margin-bottom: 2%">Vos
                            réservations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'inc/footer.inc.php' ?>

<script>
    document.getElementById('client').className = 'active';
</script>