<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php'; ?>

<?php $codeUtilisateur = $_SESSION['utilisateur']['code'];
$reservation = recupReservationClient($codeUtilisateur); ?>

<?php
$jours = 0;
$mois = 0;
$annee = 0;
$montant =0;
if($reservation == null){
$_SESSION['reservation'] = 8;
header("location: reservation.php");
}?>


<div class="container" style="margin-top: 5%">
    <div class="row" style="display: flex; justify-content: center">
        <?php for($i = 0; $i < sizeof($reservation); $i++){?>
            <div class="col-lg-4">
                <div class="card" style="margin-bottom: 5%">
                    <div class="card-body" style="display:flex; justify-content: center;">
                    <h5 class="card-title" style="color:black">Numéro de commande :<?php echo $reservation[$i]['codeReservation'];
                            $montant = montantDuDevis($reservation[$i]['codeReservation']);
                        ?></h5>
                    </div>
                    <div style="text-align:center;">
                        <p style="color:black">Date début de la réservation :<?php $date = $reservation[$i]['dateDebutReservation'];
                            $date = getdate($date);
                            $jours = $date['mday'];
                            $mois = $date['mon'];
                            $annee = $date['year'];
                            echo $jours . '/' . $mois . '/' . $annee;
                        ?></p>
                        <p style="color:black">Date de fin de la réservation :<?php
                            $date = $reservation[$i]['datefinReservation'];
                            $date = getdate($date);
                            $jours = $date['mday'];
                            $mois = $date['mon'];
                            $annee = $date['year'];
                            echo $jours . '/' . $mois . '/' . $annee;?></p>
                        </p>

                        <p style="color:black"> Prix : <?php echo $montant['montantDevis'] ;?>
                        </p>
                    </div>

                   <div class="row" style="diplay:flex; justify-content: center;">
                       <form action="supprimer.php" method="POST" style="display: flex; justify-content: center; padding:2%">
                           <button type="submit" name="codeReservation" value="<?php echo $reservation[$i]['codeReservation'] ?>" class="btn btn-primary">Supprimer</button>
                       </form>
                       <form action="devis.php" method="POST" style="display: flex; justify-content: center; padding:2%" target="_blank">
                           <button type="submit" name="codeReservation" value="<?php echo $reservation[$i]['codeReservation'] ?>" class="btn btn-primary">Devis</button>
                       </form>
                   </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once 'inc/footer.inc.php' ?>

<script>
    document.getElementById('client').className = 'active';
</script>

