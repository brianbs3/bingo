<?php
  include_once('fpdf/fpdf.php');

  function makePDF($c,$pdf)
  {

 
    $cellWidth = 30;
    $cellHeight = 20;
    //$pdf = new FPDF();
    //$pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell($cellWidth,$cellHeight,'B',1,0,'C');
    $pdf->Cell($cellWidth,$cellHeight,'I',1,0,'C');
    $pdf->Cell($cellWidth,$cellHeight,'N',1,0,'C');
    $pdf->Cell($cellWidth,$cellHeight,'G',1,0,'C');
    $pdf->Cell($cellWidth,$cellHeight,'O',1,0,'C');
    $pdf->Ln();

    $pdf->SetFont('Arial','',16);
    for($z = 0; $z < 5; $z++)
    {
      $bNum =  $c['b'][0][$z];
      $iNum =  $c['i'][0][$z];
      $nNum =  $c['n'][0][$z];
      $gNum =  $c['g'][0][$z];
      $oNum =  $c['o'][0][$z];
      $pdf->Cell($cellWidth,$cellHeight,$bNum,1,0,'C');
      $pdf->Cell($cellWidth,$cellHeight,$iNum,1,0,'C');
      $pdf->Cell($cellWidth,$cellHeight,$nNum,1,0,'C');
      $pdf->Cell($cellWidth,$cellHeight,$gNum,1,0,'C');
      $pdf->Cell($cellWidth,$cellHeight,$oNum,1,0,'C');
      $pdf->Ln();
    }
    $pdf->Ln();
    
    //$pdf->Output();
  }
 
?>
