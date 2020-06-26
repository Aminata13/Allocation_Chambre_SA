<?php

class ChambreController extends Controller
{
    public function __construct()
    {
        $this->folder = "chambre";
        $this->layout = "default";
        $this->validator = new Validator();
    }

    public function liste()
    {
        $this->view = "list";
        $this->render();
    }
    public function nouveau()
    {
        $this->view = "add";
        $this->render();
    }

    public function addRoom()
    {
        if (isset($_POST['type'])) {
            extract($_POST);

            $this->dao = new ChambreDao();

            //Validations
            $this->validator->isVide($building, 'building', "Champ obligatoire");
            $this->validator->isVide($type, 'type', "Champ obligatoire");

            if ($this->validator->isValid()) {
                $number = $this->generateNumber($building);
                $row = ['numero' => $number, 'batiment' => $building, 'type' => $type];
                $room = new Chambre($row);

                $result = $this->dao->add($room);
                if ($result != 1) {
                    echo 'erreur insertion';
                } else {
                    echo 'ok';
                }
            } else {
                $this->dataView['error'] = $this->validator->getErrors();
                $this->liste();
                echo 'erreur';
            }
        }
    }

    public function generateNumber($building)
    {
        if ($building > 1) {
            return '000-8912';
        } else {
            return '003-2839';
        }
    }
}
