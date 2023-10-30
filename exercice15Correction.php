<?php

/* 
Enoncé de l'exercice : 

Exercice : Gestion des Employés avec Propriétés et Méthodes Statiques
Objectif : Créer une classe pour gérer les employés d'une entreprise en utilisant les propriétés et méthodes statiques.

Instructions :

Créez une classe nommée Employe.

Ajoutez les propriétés suivantes à la classe Employe :

nom (public) : Le nom de l'employé.
poste (public) : Le poste de l'employé.
id (private) : Un identifiant unique pour chaque employé.
nombreEmployes (private static) : Un compteur pour suivre le nombre total d'employés créés.
Ajoutez un constructeur à la classe Employe :

Le constructeur doit accepter deux paramètres : nom et poste.
Le constructeur doit initialiser les propriétés nom et poste avec les valeurs fournies.
Le constructeur doit également attribuer un id unique à chaque employé en utilisant la propriété statique nombreEmployes et ensuite incrémenter cette propriété.

Ajoutez les méthodes suivantes à la classe Employe :

getId (public) : Retourne l'id de l'employé.
getNombreEmployes (public static) : Retourne la valeur de la propriété statique nombreEmployes.
Utilisation :

Créez plusieurs objets de type Employe.
Affichez l'id de chaque employé.
Affichez le nombre total d'employés créés en utilisant la méthode statique getNombreEmployes.
Conseils :

Utilisez la propriété statique nombreEmployes pour attribuer un identifiant unique à chaque employé.
Lors de la création d'un nouvel employé, utilisez la méthode statique pour obtenir le nombre total d'employés.

*/

// Correction : 


// Définition de la classe Employe
class Employe {
    // Propriétés de l'employé
    public $nom;
    public $poste;
    private $id;

    // Propriété statique pour compter le nombre total d'employés
    private static $nombreEmployes = 0;

    // Constructeur de la classe
    public function __construct($nom, $poste) {
        $this->nom = $nom;           // Initialisation du nom
        $this->poste = $poste;       // Initialisation du poste
        self::$nombreEmployes++;     // Incrémentation du compteur d'employés
        $this->id = self::$nombreEmployes; // Attribution d'un ID unique basé sur le compteur
    }

    // Méthode pour obtenir l'ID de l'employé
    public function getId() {
        return $this->id;
    }

    // Méthode statique pour obtenir le nombre total d'employés
    public static function getNombreEmployes() {
        return self::$nombreEmployes;
    }
}

// Utilisation de la classe Employe

// Création de trois employés
$employe1 = new Employe("Alice", "Ingénieur");
$employe2 = new Employe("Bob", "Designer");
$employe3 = new Employe("Charlie", "Manager");

// Affichage des IDs des employés
echo "ID d'Alice : " . $employe1->getId() . "\n";     // Affiche : ID d'Alice : 1
echo "ID de Bob : " . $employe2->getId() . "\n";      // Affiche : ID de Bob : 2
echo "ID de Charlie : " . $employe3->getId() . "\n";  // Affiche : ID de Charlie : 3

// Affichage du nombre total d'employés en utilisant la méthode statique
echo "Nombre total d'employés : " . Employe::getNombreEmployes();  // Affiche : Nombre total d'employés : 3
