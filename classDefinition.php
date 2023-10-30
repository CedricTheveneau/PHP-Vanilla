<?php

// Définition de la classe "Voiture"
class Voiture {
    // Propriétés de la classe avec différentes visibilités
    private $couleur;       // Propriété privée : accessible uniquement à l'intérieur de cette classe
    public $marque;         // Propriété publique : accessible de partout
    protected $numeroSerie; // Propriété protégée : accessible à l'intérieur de cette classe et ses classes dérivées

    // Constructeur de la classe
    public function __construct($couleur, $marque, $numeroSerie) {
        $this->couleur = $couleur;          // Initialisation de la propriété "couleur"
        $this->marque = $marque;            // Initialisation de la propriété "marque"
        $this->numeroSerie = $numeroSerie;  // Initialisation de la propriété "numeroSerie"
    }

    // Méthode pour obtenir la couleur de la voiture
    public function getCouleur() {
        return $this->couleur;  // Retourne la valeur de la propriété "couleur"
    }

    // Méthode pour définir la couleur de la voiture
    public function setCouleur($couleur) {
        $this->couleur = $couleur;  // Modifie la valeur de la propriété "couleur"
    }

    // Méthode pour obtenir le numéro de série (démonstration de l'accès à une propriété protégée)
    public function getNumeroSerie() {
        return $this->numeroSerie;  // Retourne la valeur de la propriété "numeroSerie"
    }
}

// Utilisation de la classe "Voiture"

$maVoiture = new Voiture("rouge", "Toyota", "12345XYZ");  // Création d'un objet "maVoiture"

echo $maVoiture->marque;  // Affiche la marque de la voiture, car la propriété "marque" est publique

echo $maVoiture->getCouleur();  // Affiche la couleur de la voiture en utilisant la méthode "getCouleur"

$maVoiture->setCouleur("bleu");  // Modifie la couleur de la voiture en utilisant la méthode "setCouleur"

echo $maVoiture->getCouleur();  // Affiche la nouvelle couleur de la voiture

echo $maVoiture->getNumeroSerie();  // Affiche le numéro de série en utilisant la méthode "getNumeroSerie"

// La ligne suivante générerait une erreur car la propriété "numeroSerie" est protégée
// echo $maVoiture->numeroSerie;

// La ligne suivante générerait également une erreur car la propriété "couleur" est privée
// echo $maVoiture->couleur;
