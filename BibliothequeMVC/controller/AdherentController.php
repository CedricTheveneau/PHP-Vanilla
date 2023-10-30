<?php

require_once $dir . 'model/AdherentModel.php';
require_once $dir . 'view/AdherentView.php';

class AdherentController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new AdherentModel();
        $this->view = new AdherentView();
    }

    // /add-adherent-action
    public function addAdherentAction()
    { // Ajout d'un adhérent
        $this->model->addAdherent($_POST['lastName'], $_POST['name'], $_POST['id']);
        header("Location: adherents");
        die;
    }

    public function removeAdherentAction()
    { // Supprimer un adhérent
        $this->model->removeAdherent($_POST['id']);
        header("Location: adherents");
    }

    // /adherents
    public function adherentListAction()
    { // Permet de lister nos adhérents

        $adherents = $this->model->getAdherents();
        $this->view->displayAdherents($adherents);
    }

    // /add-adherent
    public function formAddAdherentAction()
    {
        $this->view->displayAddAdherentForm();
    }
}
