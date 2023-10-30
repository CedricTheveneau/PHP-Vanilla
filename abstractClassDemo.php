<?php

// Classe abstraite : Animal
// Une classe abstraite ne peut pas être instanciée directement.
abstract class Animal {
    protected $nom;  // Nom de l'animal

    public function __construct($nom) {
        $this->nom = $nom;
    }

    // Méthode abstraite : doit être implémentée par toutes les classes dérivées
    abstract public function faireDuBruit();

    // Méthode normale : peut être utilisée telle quelle ou surchargée par les classes dérivées
    public function manger() {
        return "{$this->nom} mange.";
    }
}

// Classe dérivée : Chien
class Chien extends Animal {
    // Implémentation de la méthode abstraite faireDuBruit pour la classe Chien
    public function faireDuBruit() {
        return "{$this->nom} aboie.";
    }
}

// Classe dérivée : Chat
class Chat extends Animal {
    // Implémentation de la méthode abstraite faireDuBruit pour la classe Chat
    public function faireDuBruit() {
        return "{$this->nom} miaule.";
    }
}

// Utilisation des classes

$rex = new Chien("Rex");  // Création d'un objet Chien
echo $rex->faireDuBruit() . "\n";  // Affiche "Rex aboie."
echo $rex->manger() . "\n";        // Affiche "Rex mange."

$minou = new Chat("Minou");  // Création d'un objet Chat
echo $minou->faireDuBruit() . "\n";  // Affiche "Minou miaule."
echo $minou->manger() . "\n";        // Affiche "Minou mange."

// La ligne suivante générerait une erreur car on ne peut pas instancier une classe abstraite
// $animal = new Animal("Animal");
