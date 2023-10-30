<?php

/* 
Propriétés et Méthodes Statiques
En programmation orientée objet, les propriétés et méthodes d'une classe sont généralement associées à des instances individuelles de cette classe. 
Cependant, il est parfois utile d'avoir des propriétés et des méthodes qui appartiennent à la classe elle-même, plutôt qu'à une instance spécifique. 
C'est là que les propriétés et méthodes statiques entrent en jeu.

Propriétés Statiques :

Une propriété statique appartient à la classe elle-même et non à une instance de la classe.
Elle est déclarée avec le mot-clé static.
Elle est partagée entre toutes les instances de la classe.
On y accède en utilisant le nom de la classe suivi de :: (double deux-points), plutôt que d'utiliser une instance de la classe.
Méthodes Statiques :

Une méthode statique peut être appelée sans avoir à instancier la classe.
Elle est déclarée avec le mot-clé static.
Elle ne peut pas accéder à des propriétés ou méthodes non statiques de la classe.
On l'appelle en utilisant le nom de la classe suivi de ::.
*/

class Compteur {
    // Propriété statique
    private static $compte = 0;

    // Constructeur qui incrémente la propriété statique chaque fois qu'une nouvelle instance est créée
    public function __construct() {
        self::$compte++;
    }

    // Méthode statique pour obtenir la valeur actuelle de la propriété statique
    public static function getCompte() {
        return self::$compte;
    }
    public static function ajouterCompte() {
        self::$compte++;
    }
}

// Création de quelques instances de la classe Compteur
$newCompteur1 = new Compteur();
$newCompteur2 = new Compteur();
$newCompteur3 = new Compteur();

// Appel de la méthode statique sans instancier la classe
echo "Nombre d'instances créées : " . Compteur::getCompte();  // Affiche : Nombre d'instances créées : 3

Compteur::ajouterCompte();
echo Compteur::getCompte() ."<br/><br/>";

echo $compteur1->getCompte() ."<br/><br/>"; // compteur1 a également été modifié
echo $compteur3->getCompte() ."<br/><br/>"; // compteur3 a également été modifié
