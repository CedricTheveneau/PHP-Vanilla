<?php

require_once $dir . 'model/ListingModel.php';
require_once $dir . 'view/ListingView.php';

class ListingController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ListingModel();
        $this->view = new ListingView();
    }

    // /add-listing-action
    public function addListingAction()
    { // Ajout d'une tâche
        $this->model->addListing($_POST['make'], $_POST['model'], $_POST['image'],);
        header("Location: listing");
        die;
    }

    public function removeListingAction()
    { // Supprimer une tache
        $this->model->removeListing($_POST['model']);
        header("Location: listing");
    }

    // /listing
    public function listingAction()
    { // Permet de lister nos taches

        $listing = $this->model->getListings();
        $this->view->displayListing($listing);
    }

    // /add-task
    public function formAddListingAction()
    {
        $this->view->displayAddListingForm();
    }
}
