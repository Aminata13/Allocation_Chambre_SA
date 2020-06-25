<?php

class EtudiantLoge extends EtudiantBoursier {
    private $chambre;

    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }
}