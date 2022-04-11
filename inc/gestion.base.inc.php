<?php
function gestionnaireDeConnexion(){
    $pdo = null;
    try {
        $pdo = new PDO(
            //Champs a modifier en fonction de votre BDD.
            'mysql:host=127.0.0.1:3306; dbname=tholdi', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}

function listeConteneurs() {
    $lesConteneurs = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {
        $req = "select * from typeContainer order by numTypeContainer";
        $pdoStatement = $pdo->query($req);
        $lesConteneurs = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesConteneurs;
}

function verification($login, $mdp) {
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT * ,count(*) as nb FROM utilisateur "
        . " WHERE login=:login AND mdp=:mdp";
    $prep = $pdo->prepare($sql);

    $prep->bindParam(':login', $login, PDO::PARAM_STR);
    $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $prep->execute();
    $resultat = $prep->fetch();

    $prep->closeCursor();

    return $resultat;

}

function creerCompte($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $pays)
{
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $raisonSociale = $pdo->quote($raisonSociale);
        $adresse = $pdo->quote($adresse);
        $cp = $pdo->quote($cp);
        $ville = $pdo->quote($ville);
        $adrMel = $pdo->quote($adrMel);
        $telephone = $pdo->quote($telephone);
        $contact = $pdo->quote($contact);
        $login = $pdo->quote($login);
        $mdp = $pdo->quote($mdp);
        $pays = $pdo->quote($pays);
        $req = "insert into utilisateur(role,raisonSociale,adresse,cp,ville,adrMel,telephone,"
            . "contact,login,mdp,codePays)"
            . "value('USER', $raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $pays)";
        $pdo->exec($req);
    }
}

function creerReservation($strDateDebut, $strDateFin, $strDateReservation, $volume, $villeDepart, $villeArriver, $codeUtilisateur){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $strDateDebut = $pdo->quote($strDateDebut);
        $strDateFin = $pdo->quote($strDateFin);
        $strDateReservation = $pdo->quote($strDateReservation);

        $sql="SELECT COUNT(codeDevis) FROM devis";
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $codeDevis = $prep->fetch();
        $codeDevis = $codeDevis['COUNT(codeDevis)'] + 1;

        $sql="INSERT INTO devis (codeDevis, dateDevis, montantDevis, volume, nbcontainers, valider)VALUES ($codeDevis, $strDateReservation, 1, $volume, 1, 0)";
        $pdo ->exec($sql);

        $volume = $pdo->quote($volume);
        $villeDepart = $pdo->quote($villeDepart);
        $villeArriver = $pdo->quote($villeArriver);
        $codeUtilisateur = $pdo->quote($codeUtilisateur);
        $numeroReservation = rand(100, 100000);


        $req = "insert into reservation (dateDebutReservation,dateFinReservation, volumeEstime, codeDevis, CodeVilleMiseDisposition,CodeVilleRendre, codeUtilisateur, numeroDeReservation, etat)"
            ."value($strDateDebut, $strDateFin, $volume, $codeDevis, $villeDepart, $villeArriver, $codeUtilisateur, $numeroReservation, 'enCours')";
        $pdo ->exec($req);
    }
}

function listeConteneursReserve($numConteneur){
    $pdo = gestionnaireDeConnexion();
    if($pdo != null) {
        $sql = "SELECT * FROM typeContainer"
            . " WHERE numTypeContainer=:numConteneur";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(':numConteneur', $numConteneur, PDO::PARAM_STR);
        $prep->execute();
        $leConteneur = $prep->fetch();
        $prep->closeCursor();
        return $leConteneur;
    }
}

function recuperationCodeResevations($code){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $sql = "SELECT codeReservation FROM reservation WHERE codeUtilisateur = $code ORDER BY codeReservation DESC LIMIT 1";
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $codeReservation = $prep->fetch();
        $codeReservation = $codeReservation[0];

        return $codeReservation;
    }
}

function creerReserver($codeReserve){
    $pdo = gestionnaireDeConnexion();
    $numConteneur = array();
    $numConteneurCourant = 0;
    $qtReserveCourant = 0;
    $qtReserve = array();
    if ($pdo != null) {
        for($i = 1; $i < sizeof($_SESSION['panier']); $i++){
            array_push($numConteneur, $_SESSION['panier'][$i]['numTypeContainer']);
            array_push($qtReserve, $_SESSION['panier'][$i]['nbConteneur']);
        }

        for($i = 0; $i < sizeof($numConteneur); $i++){
            $numConteneurCourant = $numConteneur[$i];
            $qtReserveCourant = $qtReserve[$i];
            $sql1 = "INSERT INTO reserver value ($codeReserve, $numConteneurCourant, $qtReserveCourant)";
            $prep = $pdo->prepare($sql1);
            $prep->execute();
        }
    }

}

function recuperationResevations($code){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $sql = "SELECT codeReservation FROM reservation WHERE codeUtilisateur = $code ORDER BY codeReservation DESC LIMIT 1";
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $codeReservation = $prep->fetch();
        $codeReservation = $codeReservation[0];

        return $codeReservation;
    }
}

function dateReservation($dateDebut, $dateFin){
    if($_POST['dateDebut'] > $_POST['dateFin']){
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];
        header('Location: ./reservation.php');
    }
}

function supprimerReservation($codeReservation){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "DELETE FROM `reserver` WHERE `reserver`.`codeReservation` = $codeReservation";
        $prep =$pdo->prepare($sql);
        $prep->execute();

        $req = "DELETE FROM `reservation` WHERE `reservation`.`codeReservation` = $codeReservation";
        $prep = $pdo->prepare($req);
        $prep->execute();
    }

}

function tarificationDevis(){
    $pdo = gestionnaireDeConnexion();
    $annee = $_SESSION['panier'][0][0] ;
    $months = $_SESSION['panier'][0][1] ;
    $days = $_SESSION['panier'][0][2];
    $lesContainers = $_SESSION['panier'];
    $trimestre = floor($trimestre = $months / 3);
    $req = "SELECT * FROM tarificationContainer";
    $pdoStatement = $pdo->query($req);
    $tarificationContainer = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    $nbTarif = count($tarificationContainer);
    $coutTotal = 0;
    $qteTotal = 0;

    $nbContainers = count($_SESSION['panier']);
    for ($i=1; $i<$nbContainers; $i=$i+1) {
        $numTypeContainer = $lesContainers[$i]['numTypeContainer'];
        $qteReserver = $lesContainers[$i]['nbConteneur'];
        $qteTotal = $qteTotal + $qteReserver;
        for ($j = 0; $j < $nbTarif; $j = $j + 1) {
            if ($numTypeContainer == $tarificationContainer[$j]['numTypeContainer']) {
                $tarif = intval($tarificationContainer[$j]['tarif']);

                if ($tarificationContainer[$j]['codeDuree'] == 'ANNEE') {
                    $coutTotal = $coutTotal + (($annee * $tarif) * $qteReserver);
                } else if ($tarificationContainer[$j]['codeDuree'] == 'TRIMESTRE') {
                    $coutTotal = $coutTotal + (($trimestre * $tarif) * $qteReserver);
                } else if ($tarificationContainer[$j]['codeDuree'] == 'JOUR') {
                    $coutTotal = $coutTotal + (($days * $tarif) * $qteReserver);
                }

            }
        }
    }
    updateDevis($coutTotal);

    return $coutTotal;
}

function updateDevis($coutTotal){
    $pdo = gestionnaireDeConnexion();
    $code = $_SESSION['user']['code'];
    $codeReservation = recuperationResevations($code);
    $req = "SELECT codeDevis FROM reservation where codeReservation = $codeReservation";
    $prep =$pdo->prepare($req);
    $prep->execute();
    $codeDevis = $prep->fetch();
    $codeDevis = $codeDevis[0];

    $sql = "UPDATE devis SET montantDevis = $coutTotal WHERE codeDevis = $codeDevis";
    $prep1 =$pdo->prepare($sql);
    $prep1->execute();

}

function recupReservationClient(){
    $codeUtilisateur = $_SESSION['user']['code'];
    $reservationClient = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "SELECT  RE.numTypeContainer, codeTypeContainer, libelleTypeContainer, RE.codeReservation, qteReserver, codeDevis, dateDebutReservation, datefinReservation
        FROM reservation R, reserver RE, typeContainer T
        WHERE R.codeReservation = RE.codeReservation
        AND RE.numTypeContainer = T.numTypeContainer
        AND codeUtilisateur = $codeUtilisateur GROUP BY codeReservation";
        $pdoStatement = $pdo->query($sql);
        $reservationClient = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $reservationClient;
}

function recapCommande($codeReservation){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "SELECT codeDevis, T.numTypeContainer, T.libelleTypeContainer, T.codeTypeContainer, qteReserver
        FROM reservation R, reserver RE, typeContainer T
        WHERE R.codeReservation = RE.codeReservation
        AND T.numTypeContainer = RE.numTypeContainer
        AND R.codeReservation = $codeReservation";
        $prep =$pdo->prepare($sql);
        $prep->execute();
        $recap = $prep->fetchAll(PDO::FETCH_ASSOC);
    }
    return $recap;


}

function montantDuDevis($codeReservation){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "SELECT codeDevis, montantDevis
                FROM devis
                WHERE codeDevis in (SELECT codeDevis
                          FROM reservation
                          WHERE codeReservation = $codeReservation)";
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $montant = $prep->fetch(PDO::FETCH_ASSOC);
    }
    return $montant;
}
