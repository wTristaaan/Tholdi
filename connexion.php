<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>
<!--inclusion du header et de la navbar -->
    <div class="container">
        <div class="row" style="margin-top: 10%">
            <div class="col-md-12">
                <div style="display: flex; justify-content: center">
                    <img width="20%" src="img/logo.png" alt="LogoTholdi">
                </div>

                <form action="_connexion.traitement.php" method="post">
                    <div class="form-group">
                        <label>Nom d'utilisateur </label>
                        <input type="text" class="form-control" name="login" placeholder="Entrez votre nom d'utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="row responsiveBouton" style="display: flex; justify-content: center;">
                        <div class="col-md-6 col-sm-6">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        </div>
                        <?php if($_SESSION == null){ ?>
                            <a class="col-md-6 col-sm-6" style="display: flex; justify-content: right" href="inscription.php" style="text-decoration: none">
                                <div>
                                    <button type="button" class="btn btn-primary">Inscription</button>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'inc/footer.inc.php' ?>
<script>
    document.getElementById('connexion').className = 'active';
</script>
