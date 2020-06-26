<?php

class ChambreDao extends Manager {
    
    public function __construct() {
        $this->tableName = "chambre";   
        $this->className = "chambre";   
    }

    public function add($obj){
        $numero = $obj->getNumero();
        $batiment = $obj->getBatiment();
        $type = $obj->getType();
        $sql = "INSERT INTO chambre(numero, batiment, type) values ('$numero', '$batiment', '$type')";
        $data = $this->executeUpdate($sql);

        return $data;
    }

    public function update($obj) {

    }
}