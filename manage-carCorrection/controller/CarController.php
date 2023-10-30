<?php
require_once ROOT.'model/CarModel.php';
require_once 'Controller.php';

class CarController extends Controller {

    private $model;

    public function __construct(){
        $this->model = new CarModel();
    }

    // /car-list
    public function carListAction(){
        $voitures = $this->model->getCars();
        $this->render('list-car-view', [
            'voitures' => $voitures
        ]);
    }

    // /form-add-car
    public function addCarFormAction(){
        $this->render('add-car-view');
    }

// addCar
    public function addCarAction(){
        $this->model->addCar($_POST['marque'], $_POST['model'], $_POST['image']);
        header("Location: car-list");
    }
// removeCar

    public function removeCarAction(){
        $this->model->removeCar($_POST['index']);
        header("Location: car-list");
    }
}