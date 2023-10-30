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


// Classe de base : Vehicule
class Vehicule {
    protected $marque;      // Marque du véhicule
    protected $modele;      // Modèle du véhicule
    protected $vitesseMax;  // Vitesse maximale du véhicule

    // Constructeur de la classe
    public function __construct($marque, $modele, $vitesseMax) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
    }

    // Méthode pour décrire le véhicule
    public function description() {
        return "{$this->marque} {$this->modele} avec une vitesse maximale de {$this->vitesseMax} km/h";
    }
}

// Classe dérivée : Voiture
class Voiture extends Vehicule {
    private $nombrePortes;  // Nombre de portes de la voiture

    // Constructeur de la classe Voiture
    public function __construct($marque, $modele, $vitesseMax, $nombrePortes) {
        parent::__construct($marque, $modele, $vitesseMax);  // Appel du constructeur de la classe parente
        $this->nombrePortes = $nombrePortes;
    }

    // Surcharge de la méthode description pour inclure le nombre de portes
    public function description() {
        return parent::description() . " et {$this->nombrePortes} portes";
    }
}

// Classe dérivée : Moto
class Moto extends Vehicule {
    private $typeCasque;  // Type de casque pour la moto

    // Constructeur de la classe Moto
    public function __construct($marque, $modele, $vitesseMax, $typeCasque) {
        parent::__construct($marque, $modele, $vitesseMax);  // Appel du constructeur de la classe parente
        $this->typeCasque = $typeCasque;
    }

    // Surcharge de la méthode description pour inclure le type de casque
    public function description() {
        return parent::description() . " et un casque {$this->typeCasque}";
    }
}

// Bonus : Classe dérivée : Camion
class Camion extends Vehicule {
    private $capaciteChargement;  // Capacité de chargement du camion

    // Constructeur de la classe Camion
    public function __construct($marque, $modele, $vitesseMax, $capaciteChargement) { // On surcharge la methode __construct
        parent::__construct($marque, $modele, $vitesseMax);  // Appel du constructeur de la classe parente
        $this->capaciteChargement = $capaciteChargement;
    }

    // Surcharge de la méthode description pour inclure la capacité de chargement
    public function description() {
        return parent::description() . " avec une capacité de chargement de {$this->capaciteChargement} kg";
    }
}

// Utilisation des classes

$maVoiture = new Voiture("Toyota", "Corolla", 180, 4);
echo $maVoiture->description() . "\n";  // Affiche la description de la voiture

$maMoto = new Moto("Yamaha", "YZF", 220, "intégral");
echo $maMoto->description() . "\n";  // Affiche la description de la moto

// Bonus
$monCamion = new Camion("Mercedes", "Actros", 140, 5000);
echo $monCamion->description() . "\n";  // Affiche la description du camion
