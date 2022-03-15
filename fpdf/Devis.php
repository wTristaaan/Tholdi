<?php
require('fpdf.php');

class Devis extends FPDF
{
    public $codeReservation;
    public $file;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getCodeReservation()
    {
        return $this->codeReservation;
    }
    /**
     * @param mixed $codeReservation
     */
    public function setCodeReservation($codeReservation): void
    {
        $this->codeReservation = $codeReservation;
    }

    public function Header()
    {
        $code = Devis::getCodeReservation();
        // Logo
        $this->Image('img/logo.png', 10, 6, 30);
        // Police Arial gras 15
        $this->SetFont('Arial', 'B', 15);
        // Décalage à droite
        $this->Cell(60);
        // Titre
        $this->Cell(80, 10, 'Devis de la reservation: '.$code, 1, 0, 'C');
        // Saut de ligne
        $this->SetFillColor(0,255,0);
        $this->Ln(20);

    }

    function LoadData($file)
    {
        // Lecture des lignes du fichier
        $lines = file($file);
        $data = array();
        foreach($lines as $line)
            $data[] = explode(';',trim($line));
        return $data;
    }
    function BasicTable($header, $data)
    {
        // En-tête
        foreach($header as $col)
            $this->Cell(20,7,$col,1);
        $this->Ln();
        // Données
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(40,6,$col,1);
            $this->Ln();
        }
    }

    function CellFit ($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Obtient la taille du texte
        $str_width = $this->GetStringWidth($txt);

        //Calcule le rapport pour ajuster la cellule
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $ratio = ($w - $this->cMargin * 2) / $str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit) {
            if ($scale) {
                //Calcule de l'échelle (horizontale)
                $horiz_scale = $ratio * 100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET', $horiz_scale));
            } else {
                //Calculate character spacing in points
                $char_space = ($w - $this->cMargin * 2 - $str_width) / max(strlen($txt) - 1, 1) * $this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET', $char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align = '';
        }
        //Pass on to Cell method
        $this->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);

        //Reset character spacing/horizontal scaling
        if ($fit){
            $this->_out('BT ' . ($scale ? '100 Tz' : '0 Tc') . ' ET');
        }
    }
    //Cell with horizontal scaling only if necessary
    function CellFitScale($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,false);
    }

    //Cell with horizontal scaling always
    function CellFitScaleForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,true);
    }

    //Cell with character spacing only if necessary
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }

    //Cell with character spacing always
    function CellFitSpaceForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        //Same as calling CellFit directly
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,true);
    }

// Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial', 'I', 8);
        // Numéro de page
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}