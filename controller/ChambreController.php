<?php

class ChambreController extends Controller {
    public function __construct() {
        $this->folder = "chambre";
        $this->layout = "default";
        $this->validator = new Validator();
    }

    public function liste() {
        $this->view = "list";
        $this->render();
    }
    public function add() {
        $this->view = "add";
        $this->render();
    }
}