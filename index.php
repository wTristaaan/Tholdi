<?php include_once 'inc/base.inc.php'?>
<?php include_once 'inc/nav.inc.php'?>

<?php $pdo = gestionnaireDeConnexion();
$sql = "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
$prep = $pdo->prepare($sql);
$prep->execute();
?>


<?php if($_SESSION != null){ ?>
<?php if ($_SESSION['user']['nb'] == 0) {
            echo "<script>alert(\"Nom d'utilisateur ou mot de passe incorrect, réessayez !\")</script>";
            session_unset();
        }?>
<?php } ?>

<div class="container">
    <div class="row" style="padding: 1%; text-align: center">
       <div class="col-lg-12 col-md-12 col-sm-12">
           Votre site de reservations de gestion de conteneurs destinées au transport de
           marchandises
       </div>
    </div>
    <div class="row" style="padding: 1%; text-align: center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            Qui sommes nous ? :
        </div>
    </div>
    <div class="row" style="padding: 1%; text-align: center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            L'entreprise THOLDI est spécialisée dans la gestion des containeurs destinés au transport
            de
            marchandises
        </div>
    </div>
    <div class="row" style="padding: 1%; text-align: center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            Nous intervenons en qualité de prestataire de services pour le compte d’entreprises de
            transports mais depuis
            2010 nous développons
            une activité de fret au travers de la filiale « Eole ».
        </div>
    </div>
    <div class="row" style="padding: 1%; text-align: center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            Notre siège social de THOLDI est suit à Gennevilliers, en région parisienne, et nos zones
            d’activités sont
            implantées dans plusieurs installations portuaires européennes :
        </div>
    </div>


    <div class="container" style="flex-flow: wrap; display: flex; justify-content: center">
        <div class="row rowFluid rowIndex" style="margin-bottom: 3%">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style=" width: 18rem">
                    <img class="card-img-top" src="img/gennevilliers.png" alt="Port de Gennevilliers">
                    <div class="card-body">
                        <h5 class="card-title">Port de Gennevilliers</h5>
                        <a href="https://fr.wikipedia.org/wiki/Port_de_Gennevilliers" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/havre.png" alt="Port du Havre">
                    <div class="card-body">
                        <h5 class="card-title">Port du Havre</h5>
                        <a href="https://fr.wikipedia.org/wiki/Grand_port_maritime_du_Havre" class="btn btn-primary">Plus d'infos
                            ?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/marseille.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Port de Marseille</h5>
                        <a href="https://www.marseille-port.fr/index" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row rowFluid rowIndex" style="margin-bottom: 3%">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/hambourg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Port de Hambourg</h5>
                        <a href="https://www.hafen-hamburg.de/" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/anvers.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Port de Anvers</h5>
                        <a href="https://www.portofantwerp.com/en" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/barcelone.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Port de Barcelone</h5>
                        <a href="http://www.portdebarcelona.cat/fr/home_apb" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
        </div >

        <div class="row rowIndex" style="margin-bottom: 3%;">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/roterdam.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Port de Roterdam</h5>
                        <a href="https://www.portofrotterdam.com/en" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/gene.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Port de Gênes</h5>
                        <a href="https://www.portsofgenoa.com/fr/" class="btn btn-primary">Plus d'infos ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'inc/footer.inc.php' ?>

<script>
        document.getElementById('index').className = 'active'
</script>
