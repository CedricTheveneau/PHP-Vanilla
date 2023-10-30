<?php

/* 
Enoncé de l'exercice : 

Exercice : Gestion d'une Bibliothèque
Objectif : Créer une classe pour gérer un livre dans une bibliothèque en utilisant les concepts de portée des propriétés et des méthodes (public, protected, private).

Instructions :

Créez une classe nommée Livre.

Ajoutez les propriétés suivantes à la classe Livre :

titre (public) : Le titre du livre.
auteur (public) : L'auteur du livre.
isbn (private) : Le numéro ISBN du livre.
emprunte (protected) : Un booléen indiquant si le livre est actuellement emprunté ou non.
Ajoutez un constructeur à la classe Livre :

Le constructeur doit accepter trois paramètres : titre, auteur et isbn.
Le constructeur doit initialiser les propriétés titre, auteur et isbn avec les valeurs fournies.
La propriété emprunte doit être initialisée à false.
Ajoutez les méthodes suivantes à la classe Livre :

emprunterLivre (public) : Modifie la propriété emprunte à true.
retournerLivre (public) : Modifie la propriété emprunte à false.
estEmprunte (public) : Retourne la valeur de la propriété emprunte.
obtenirIsbn (public) : Retourne la valeur de la propriété isbn.
changerIsbn (private) : Accepte un nouveau numéro ISBN en tant que paramètre et modifie la propriété isbn.
Utilisation :

Créez un objet de type Livre.
Affichez le titre, l'auteur et l'ISBN du livre.
Empruntez le livre, puis vérifiez s'il est emprunté.
Retournez le livre, puis vérifiez à nouveau s'il est emprunté.
Notes :

Assurez-vous que le numéro ISBN ne peut être modifié que de l'intérieur de la classe (en utilisant la méthode changerIsbn).
Assurez-vous que l'état d'emprunt du livre (emprunté ou non) ne peut être modifié que via les méthodes emprunterLivre et retournerLivre.
Cet exercice est conçu pour être clair et précis, en mettant l'accent sur la compréhension et l'application des différentes portées des propriétés et des méthodes en POO PHP.


*/

// Correction : 

// Définition de la classe Livre
class Livre {
    // Propriétés de la classe
    public $titre;       // Titre du livre
    public $auteur;      // Auteur du livre
    private $isbn;       // Numéro ISBN du livre (privé pour empêcher l'accès direct)
    protected $emprunte; // Indique si le livre est emprunté ou non (protégé pour limiter l'accès)

    // Constructeur de la classe
    public function __construct($titre, $auteur, $isbn) {
        $this->titre = $titre;       // Initialisation du titre
        $this->auteur = $auteur;     // Initialisation de l'auteur
        $this->isbn = $isbn;         // Initialisation de l'ISBN
        $this->emprunte = false;     // Par défaut, le livre n'est pas emprunté
    }

    // Méthode pour emprunter le livre
    public function emprunterLivre() {
        $this->emprunte = true;      // Marque le livre comme emprunté
    }

    // Méthode pour retourner le livre
    public function retournerLivre() {
        $this->emprunte = false;     // Marque le livre comme non emprunté
    }

    // Méthode pour vérifier si le livre est emprunté
    public function estEmprunte() {
        return $this->emprunte;      // Retourne l'état d'emprunt du livre
    }

    // Méthode pour obtenir l'ISBN
    public function obtenirIsbn() {
        return $this->isbn;          // Retourne l'ISBN du livre
    }

    // Méthode privée pour changer l'ISBN
    private function changerIsbn($nouvelIsbn) {
        $this->isbn = $nouvelIsbn;   // Modifie l'ISBN du livre
    }
}

// Utilisation de la classe

// Création d'un objet Livre
$monLivre = new Livre("1984", "George Orwell", "978-0451524935");

// Affichage des détails du livre
echo "Titre: " . $monLivre->titre . "\n";
echo "Auteur: " . $monLivre->auteur . "\n";
echo "ISBN: " . $monLivre->obtenirIsbn() . "\n";

// Emprunter le livre
$monLivre->emprunterLivre();
echo "Le livre est emprunté ? " . ($monLivre->estEmprunte() ? "Oui" : "Non") . "\n";

// Retourner le livre
$monLivre->retournerLivre();
echo "Le livre est emprunté ? " . ($monLivre->estEmprunte() ? "Oui" : "Non") . "\n";

// Note: La méthode changerIsbn est privée, donc nous ne pouvons pas l'appeler directement depuis l'extérieur de la classe.
