<?php

class Controller {
    protected $layout;
    protected $view;
    protected $folder;
    protected $dataView=[];
    protected $dao;
    protected $validator;

    public function render() {
        $pathLayout = './view/layout/'.$this->layout.'.php';
        $pathView = './view/'.$this->folder.'/'.$this->view.'.php';
        
        //on récupére le contenu de la vue
        ob_start();
        extract($this->dataView);
        require_once($pathView);
        $contentForLayout = ob_get_clean();
        require_once($pathLayout);
    }
}