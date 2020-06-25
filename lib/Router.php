<?php

class Router {
    private $controller;

    public function route() {
        try {

            //Chargement dynamique des classes, i.e, Autoloading
            spl_autoload_register(function ($class) {
                $pathModel = "./model/".$class.".php";
                $pathDao = "./dao/".$class.".php";
                $pathLib = "./lib/".$class.".php";

                if(file_exists($pathModel)) {
                    require_once($pathModel);
                } elseif (file_exists($pathDao)) {
                    require_once($pathDao);
                } elseif (file_exists($pathLib)) {
                    require_once($pathLib);
                }
            });

            if (isset($_GET['url'])) {
                $url = explode("/", filter_var($_GET['url'], FILTER_SANITIZE_URL));
                $controllerFile = ucfirst(strtolower($url[0])).'Controller';
                $pathController = './controller/'.$controllerFile.'.php';
    
                if (file_exists($pathController)) {
                    require_once($pathController);
                    $this->controller = new $controllerFile();
                    $action = $url[1];
                    
                    if (method_exists($this->controller, $action)) {
                        $this->controller->{$action}();
                    } 
                    else {
                        $pathController = './controller/ErrorController.php';
                        require_once($pathController);
                        $errorCtrl = new ErrorController();
                        $errorCtrl->showError('Cette méthode n\'existe pas');
                    }
                } else {
                    $pathController = './controller/ErrorController.php';
                    require_once($pathController);
                    $errorCtrl = new ErrorController();
                    $errorCtrl->showError('Cette page n\'existe pas');
                }
            } else {
                $pathController = './controller/EtudiantController.php';
                require_once($pathController);
                $this->controller = new EtudiantController();
                $this->controller->liste();
            }
            
            
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}