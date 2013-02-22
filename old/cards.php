<?php

  include_once('timer.php');
  $sTimer = new bsTimer();
  $sTimer->startTimer();

  include_once('fpdf/fpdf.php');
  include_once('makePDF.php');
//print"<pre>";
//print_r($card);
//print"</pre>";

$pdf = new FPDF();
$pdf->AddPage();
$NUMBER_OF_CARDS = 3;
$cards = array();

for($x = 0; $x < $NUMBER_OF_CARDS; $x++)
{
  $card = generateCard();
  if(count($cards) == 0)
    $cards[] = $card;
  else
    foreach($cards as $cKey=>$cValue)
    {
      if($card == $cValue)
        print"<h1>Match</h1>";
      else
        $cards[$x] = $card;
    }
}

$counter = 0;
foreach($cards as $c)
{
  if($counter % 2)
    $pdf->AddPage();
  //printCard($c);
  makePDF($c,$pdf);
}
$pdf->Output('pdf/cards.pdf');
print"<a href=pdf/cards.pdf>Cards</a><br>";

$cardCount = count($cards);
print"# of Cards: $cardCount<br>";

  $sTimer->stopTimer();
  $sTimer->printMessage();

function generateCard()
{

  $b = array();
  $i = array();
  $n = array();
  $g = array();
  $o = array();

  //$card = array('b'=>array(),'i',=>array(),'n'=>array(),'g'=>array(),'o'=>array());

  // B's
  while(count($b) < 5)
  {
    $rand = (rand() % 15 + 1);
    if(!array_key_exists($rand, $b))
      $b[$rand] = $rand;
  }
  while(count($i) < 5)
  {
    $rand = (rand() % 15 + 16);
    if(!array_key_exists($rand, $i))
      $i[$rand] = $rand;
  }
  while(count($n) < 5)
  {
    $rand = (rand() % 15 + 31);
    if(!array_key_exists($rand, $n))
      $n[$rand] = $rand;
  }
  while(count($g) < 5)
  {
    $rand = (rand() % 15 + 46);
    if(!array_key_exists($rand, $g))
      $g[$rand] = $rand;
  }
  while(count($o) < 5)
  {
    $rand = (rand() % 15 + 61);
    if(!array_key_exists($rand, $o))
      $o[$rand] = $rand;
  }

  $a = array();
  foreach($b as $bKey=>$bValue)
  {
    $a[] = $bValue;
  }
  $b = $a;
  $a = array();
  foreach($i as $iKey=>$iValue)
  {
    $a[] = $iValue;
  }
  $i = $a;
  $a = array();
  foreach($n as $nKey=>$nValue)
  {
    $a[] = $nValue;
  }
  $n = $a;
  $n[2] = '*';
  $a = array();
  foreach($g as $gKey=>$gValue)
  {
    $a[] = $gValue;
  }
  $g = $a;
  $a = array();
  foreach($o as $oKey=>$oValue)
  {
    $a[] = $oValue;
  }
  $o = $a;

  $card = array('b'=>array($b),'i'=>array($i),'n'=>array($n),'g'=>array($g),'o'=>array($o));

  return $card;
}
function printCard($card)
{
  print"<table border=1>
    <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
  ";
  for($z = 0; $z < 5; $z++)
  {
    print"<tr>
      <td>".$card['b'][0][$z]."</td>
      <td>".$card['i'][0][$z]."</td>
      <td>".$card['n'][0][$z]."</td>
      <td>".$card['g'][0][$z]."</td>
      <td>".$card['o'][0][$z]."</td>
    </tr>
    ";
  }
  print"</table>";
}
?>
