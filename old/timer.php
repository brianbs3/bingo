<?php

class bsTimer
{
  public $startTime = 0;
  public $endTime = 0;
  public $totalTime = 0; 

  public function startTimer()
  {
    $mtime = microtime();
    $mtime = explode(" ", $mtime);
    $this->startTime = $mtime[1] + $mtime[0];
  }

  public function stopTimer()
  {
    $mtime = microtime();
    $mtime = explode(" ", $mtime);
    $this->endTime = $mtime[1] + $mtime[0];
    $this->totalTime = number_format(($this->endTime - $this->startTime), 5);
  }

  public function printMessage()
  {
    print"Processing Time: ".$this->totalTime." seconds.";
  }
  
} 
?>
