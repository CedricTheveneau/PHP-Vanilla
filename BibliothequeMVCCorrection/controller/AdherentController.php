<?php

require_once ROOT.'model/AdherentModel.php';
require_once 'Controller.php';

class AdherentController extends Controller {

    private $model;

    public function __construct(){
        $this->model = new AdherentModel();
    }

    public function adherentListAction(){
        $adherents = $this->model->getAdherents();
        $this->render('adherent-list-view', [
            'adherents' => $adherents
        ]);
    }

    public function formAddAdherentAction(){
        $this->render('form-add-adherent-view');
    }

    public function addAdherentAction(){
        $this->model->addAdherent($_POST['nom'], $_POST['prenom'], $_POST['dateInscription']);
        header("Location: adherent-list");
    }

    public function removeAdherentAction(){
        $this->model->removeAdherent($_GET['adherentId']);
        header("Location: ".host."adherent-list");
    }

}