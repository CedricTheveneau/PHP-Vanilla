<?php

/* 

Enoncé de l'exercice : 

Exercice : Gestion d'un Panier d'Achats avec Méthodes Magiques
Objectif : Créer une classe pour gérer un panier d'achats en utilisant les méthodes magiques en POO PHP.

Instructions :

Créez une classe nommée Panier.

Ajoutez les propriétés suivantes à la classe Panier :

articles (private) : Un tableau associatif pour stocker les articles du panier. La clé sera le nom de l'article et la valeur sera la quantité.
Implémentez les méthodes magiques suivantes :

__set($nom, $quantite) : Ajoute un article au panier ou modifie la quantité d'un article existant.

__get($nom) : Retourne la quantité d'un article spécifié dans le panier. Si l'article n'existe pas, retournez 0.

__isset($nom) : Vérifie si un article spécifié existe dans le panier.

__unset($nom) : Supprime un article spécifié du panier.

__toString() : Retourne une représentation sous forme de chaîne du panier, montrant tous les articles et leurs quantités.

Utilisation :

Créez un objet de type Panier.
Ajoutez quelques articles au panier.
Modifiez la quantité de certains articles.
Affichez la quantité d'un article spécifique.
Vérifiez si un article spécifique existe dans le panier.
Supprimez un article du panier.
Affichez le contenu complet du panier.
Conseils :

Utilisez les méthodes magiques pour interagir avec les articles du panier comme s'ils étaient des propriétés de l'objet.
Lors de l'affichage du panier avec __toString, formatez le résultat pour qu'il soit lisible, par exemple : "Article1: 2, Article2: 5".

*/

// Correction
class Basket
{
    private $basket;

    public function __construct()
    {
        $this->basket = [];
    }

    public function __set($name, $quantity)
    {
        if (isset($this->basket[$name])) {
            $this->basket[$name] += $quantity;
        } else {
            $this->basket[$name] = $quantity;
        }
    }

    public function __get($name)
    {
        if (!isset($this->basket[$name])) {
            echo "Can't find this object in the basket. It's quantity is equal to " . 0 . "<br/>";
        } else {
            echo "Found the item in the basket ! As of right now, you have {$this->basket[$name]} {$name}<br/>";
        }
    }

    public function __isset($name)
    {
        if (isset($this->basket[$name])) {
            echo "{$name} exists in the basket.<br/>";
        } else {
            echo "{$name} isn't set<br/>";
        }
    }

    public function __unset($name)
    {
        unset($this->basket[$name]);
    }

    public function __toString()
    {
        foreach ($this->basket as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
    }
}

$basket = new Basket;
$basket->__set('Banana', 2);
$basket->__set('Apple', 4);
$basket->__set('Pear', 1);
$basket->__set('Banana', 5);
$basket->__get('Banana');
$basket->__isset('Banana');
$basket->__get('Cherry');
$basket->__isset('Cherry');
$basket->__unset('Pear', 5);
$basket->__get('Pear');
$basket->__isset('Pear');
$basket->__toString();
