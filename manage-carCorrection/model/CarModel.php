<?php

class CarModel {

    public function __construct(){
        if (!isset($_SESSION['voitures'])) {
            $_SESSION['voitures'] = [];
        }        
    }

    public function getCars() {
        return $_SESSION['voitures'];
    }

    public function addCar($marque, $model, $image){
        $_SESSION['voitures'][] = ['marque' => $marque, 'model' => $model, 'image' => $image];
    }

    public function removeCar($id) {
        foreach($_SESSION['voitures'] as $id => $voiture) {
            if($id == $_POST['index']){
                unset($_SESSION['voitures'][$id]);
            }
        }        
    }
    
}