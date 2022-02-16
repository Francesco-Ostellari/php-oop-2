<?php 

trait FasciaUtente
{
  public function __construct($name, $lastName, $level) 
  {
    parent:: __construct($name, $lastName);
    $this->setLevel($level);
  }
} 

?>