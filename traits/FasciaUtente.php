<?php

trait FasciaUtente 

{
    protected $fasciaUtente;
    protected $sconto;



    /**
     * Get the value of fasciaUtente
     */ 
    public function getFasciaUtente()
    {
        return $this->fasciaUtente;
    }

    /**
     * Set the value of fasciaUtente
     *
     * @return  self
     */ 
    public function setFasciaUtente($fasciaUtente)
    {
        $this->fasciaUtente = $fasciaUtente;

        return $this;

    }

    /**
     * Get the value of sconto
     */ 
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set the value of sconto
     *
     * @return  self
     */ 
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }
}