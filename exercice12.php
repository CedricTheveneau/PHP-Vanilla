<?php

/* 
Enoncé de l'exercice :

Exercice : Gestion des Véhicules
Objectif : Créer un ensemble de classes pour gérer différents types de véhicules.

Instructions :

Classe de base Vehicule :
Propriétés : marque, modele, vitesseMax.
Constructeur : Initialise les propriétés marque, modele et vitesseMax.
Méthode description : Retourne une chaîne de caractères décrivant le véhicule (par exemple : "Toyota Corolla avec une vitesse maximale de 180 km/h").

Classe dérivée Voiture :
Hérite de la classe Vehicule.
Propriété supplémentaire : nombrePortes (par exemple : 4).
Surcharge de la méthode description pour inclure le nombre de portes (par exemple : "Toyota Corolla avec une vitesse maximale de 180 km/h et 4 portes").

Classe dérivée Moto :
Hérite de la classe Vehicule.
Propriété supplémentaire : typeCasque (par exemple : "intégral").
Surcharge de la méthode description pour inclure le type de casque (par exemple : "Yamaha YZF avec une vitesse maximale de 220 km/h et un casque intégral").

Utilisation des classes :
Créez un objet de type Voiture et un objet de type Moto.
Affichez la description de chaque objet.

*/

// Correction :

abstract class Vehicule
{
    protected $make;
    protected $model;
    protected $topSpeed;

    public function __construct($make, $model, $topSpeed)
    {
        $this->make = $make;
        $this->model = $model;
        $this->topSpeed = $topSpeed;
    }

    public function description()
    {
        echo "The {$this->make} {$this->model} has a top speed of {$this->topSpeed}km/h.";
    }
}

class Car extends Vehicule
{
    public $doorCount;

    public function setDoorCount($doorCount)
    {
        $this->doorCount = $doorCount;
    }

    public function extendedDescription()
    {
        $this->description();
        echo " It has {$this->doorCount} doors.";
    }
}

class Motorcycle extends Vehicule
{
    public $helmetType;

    public function setHelmetType($helmetType)
    {
        $this->helmetType = $helmetType;
    }

    public function extendedDescription()
    {
        $this->description();
        echo " It requires an {$this->helmetType} helmet.";
    }
}

$car = new Car('Toyota', 'GR86', 280);
$car->setDoorCount(2);
$car->extendedDescription();
echo '<br/>';
$motorcycle = new Motorcycle('Kawasaki', 'Ninja H2R', 340);
$motorcycle->setHelmetType('integral');
$motorcycle->extendedDescription();
