<?php

class EtudiantController extends Controller {

    public function __construct() {
        $this->folder = "etudiant";
        $this->layout = "default";
        $this->validator = new Validator();
    }

    public function liste() {
        $this->view = "list";
        $this->render();
    }

    public function add() {
        $this->view = "register";
        $this->render();
    }
}