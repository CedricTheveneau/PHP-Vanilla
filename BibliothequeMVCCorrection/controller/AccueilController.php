<?php

require_once 'Controller.php';

class AccueilController extends Controller{

    public function accueilAction(){
        $this->render('accueil-view');
    }

}