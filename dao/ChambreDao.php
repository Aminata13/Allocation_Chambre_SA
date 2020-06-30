<?php

class ChambreDao extends Manager {
    
    public function __construct() {
        $this->tableName = "chambre";   
        $this->className = "Chambre";   
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
        $sql = "UPDATE $this->tableName SET batiment = '{$obj['num_batiment']}', type = '{$obj['type_chambre']}' WHERE id = '{$obj['id_chambre']}'";
        $this->executeUpdate($sql);
        }
}