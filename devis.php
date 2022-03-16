<?php
    require ('fpdf/Devis.php');
    include_once('inc/gestion.base.inc.php');
    include_once('inc/init.php');
    $codeUtilisateur = $_SESSION['user']['code'];
    $reservation = recupReservationClient($codeUtilisateur);
    $codeReservation = $_POST['codeReservation'];
    $adresse = $_SESSION['user']['adresse'];
    $cp = $_SESSION['user']['cp'];
    $ville = $_SESSION['user']['ville'];
    $telephone = $_SESSION['user']['telephone'];
    $recap = recapCommande($codeReservation);
    $montant = montantDuDevis($codeReservation);


    // Instanciation de la classe dérivée
    $pdf = new Devis();
    $pdf->setCodeReservation($codeReservation);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',14);
    $pdf->Cell(139,25, 'Adresse client',0,0);
    $pdf->Text(11,51,utf8_decode($adresse));
    $pdf->Text(11,56,utf8_decode($cp));
    $pdf->Text(11,61,utf8_decode($ville));
    $pdf->Text(11,66, utf8_decode($telephone));

    $pdf->Cell(150,25, 'Adresse',0,0);
    $pdf->Text(150,51,'Moll de Llevant');
    $pdf->Text(150,56,'08039');
    $pdf->Text(150,61,'Barcelone');
    $pdf->Text(150,66,'0687175444');
    $pdf->Ln(20);

    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(200,100,'Recapitulation commande',0,0, 'C');
    $pdf->Ln(65);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(10,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Numero du devis'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(48,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Numero du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(86,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Nom du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(124,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Code du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(162,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Quantité'),1,0);
    $pdf->Ln(10);

    foreach($recap as $col){
        foreach($col as $test){
            $pdf->CellFitScale(38,10,$test,1,0);
        }
        $pdf->Ln(10);
    }
    $pdf->Ln(90);

    $pdf->Text(150,180,'Prix TTC :');
    $pdf->Text(168,180,utf8_decode($montant['montantDevis']). ' euros');

    $pdf->Output();
?>