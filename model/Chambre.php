<?php 

class Chambre implements IAlloc {
    private $id;
    private $numero;
    private $batiment;
    private $type;
    
    private $collectionEtudiant =  [];

    public function __construct($row=null)
    {
        if ($row != null) {
            $this->hydrate($row);
        }
    }

    public function hydrate($row) {
        $this->numero = $row['numero'];
        $this->batiment = $row['batiment'];
        $this->type = $row['type'];
    } 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of batiment
     */ 
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Set the value of batiment
     *
     * @return  self
     */ 
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}