<?php

// Classe de base : Animal
abstract class Animal { // Cette classe ne peux pas être instanciée, elle peut juste faire hériter
    private $age; // Les classes Chien et Chat ne vont pas hériter de cette propriété car elle est privée
    protected $nom;  // Les classes Chien et Chat vont hériter de cette propriété car elle est protected
    public $rasasie = false; // Les classes Chien et Chat vont hériter de cette propriété car elle est public

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function manger() {
        $this->rasasie = true;
        return "{$this->nom} mange.<br/>";
    }
}

// Classe dérivée : Chien, qui hérite de la classe Animal
class Chien extends Animal {
    public function aboyer() {
        return "{$this->nom} aboie.<br/>";
    }
}

// Classe dérivée : Chat, qui hérite de la classe Animal
class Chat extends Animal {
    public function miauler() {
        return "{$this->nom} miaule.<br/>";
    }
}

// Utilisation des classes

$rex = new Chien("Rex");  // Création d'un objet Chien
echo $rex->manger();      // Utilisation d'une méthode héritée de la classe Animal
echo $rex->aboyer();      // Utilisation d'une méthode spécifique à la classe Chien

$minou = new Chat("Minou");  // Création d'un objet Chat
echo $minou->manger();       // Utilisation d'une méthode héritée de la classe Animal
echo $minou->miauler();      // Utilisation d'une méthode spécifique à la classe Chat
