<?php

abstract class Manager implements IDao {
    //La connexion est fermée au début
    private $pdo = null;
    protected $tableName;
    protected $className;

    /**
     * Connexion à la BD
     */
    private function getConnexion() {
        if($this->pdo == null) {
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=projet_poo_mvc;charset=utf8', 'root', '');
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }

    /**
     * Fermer la connexion à la BD
    */
    private function closeConnexion() {
        if($this->pdo !== null) {
            $this->pdo = null;
        }
    }

    /**
     * Exécuter une requête et retourner un résultat
     * Exécution Requête de MaJ (Insert, Update, Delete)
     */
    public function executeUpdate($sql) {
        $this->getConnexion();
        
        //traitement (requête préparer pour nous)
        $nbrLignes = $this->pdo->exec($sql);

        $this->closeConnexion();

        return $nbrLignes;
    }

    /**
     * Exécuter une requête et retourner un résultat
     * Exécution requête Select
     */
    public function executeSelect($sql) {
        $this->getConnexion();
        //traitement (requête préparer pour nous)
        $result = $this->pdo->query($sql);
        $data = [];

        foreach ($result as $rowDB) {
            //ORM -- Transformer tuple BD en Objet
            $data[] = new $this->className($rowDB);
        }
        $this->closeConnexion();
        return $data;
    }

    /**
     * Redéfinition des méthodes qui présentaient une redondance
     * Seul le nom de la table différent dans les classes filles
     */
    public function findAll() {
        $sql = "SELECT * FROM $this->tableName";
        $data = $this->executeSelect($sql);
        var_dump($data);
    }

    public function findById($id) {
        $sql = "SELECT * FROM $this->tableName WHERE id=$id";
        $data = $this->executeSelect($sql);
        return count($data)==1?$data[0]:$data;
    }

    public function delete($id){
        $sql = "DELETE FROM $this->tableName WHERE id=$id";
    } 
}