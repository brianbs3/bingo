<?php
  $b = array();
  $i = array();
  $n = array();
  $g = array();
  $o = array();
  for($z = 0; $z < 5; $z++)
  {
    $b[] = $z+1;
    $i[] = $z+1;
    $n[] = $z+1;
    $g[] = $z+1;
    $o[] = $z+1;
  }  
  $card1 = array('b'=>array($b),'i'=>array($i),'n'=>array($n),'g'=>array($g),'o'=>array($o));
  $card2 = array('b'=>array($b),'i'=>array($i),'n'=>array($n),'g'=>array($g),'o'=>array($o));

  $card2['b'][0][2] = 32223;
  if($card1 == $card2)
    print"Equal";
  else
    print"Not Equal";
?>
