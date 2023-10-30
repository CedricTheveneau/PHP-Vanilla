<?php
require_once ROOT . 'model/AdherentModel.php';
require_once 'Controller.php';

class AdherentController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new AdherentModel();
    }

    // /adherents
    public function adherentListAction()
    {
        $adherents = $this->model->getAdherents();
        $this->render('list-adherent-view', [
            'adherents' => $adherents
        ]);
    }

    // /form-add-adherent
    public function formAddAdherentAction()
    {
        $this->render('add-adherent-view');
    }

    // add-adherent
    public function addAdherentAction()
    {
        $this->model->addAdherent($_POST['lastName'], $_POST['name'], $_POST['id']);
        header("Location: adherents");
    }
    // remove-adherent

    public function removeAdherentAction()
    {
        $this->model->removeAdherent($_POST['index']);
        header("Location: adherents");
    }
}
