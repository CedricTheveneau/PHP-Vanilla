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

// Définition de la classe Panier
class Panier {
    // Propriété pour stocker les articles du panier
    private $articles = [];

    // Méthode magique pour définir un article dans le panier
    public function __set($nom, $quantite) {
        // Ajoute ou modifie la quantité d'un article dans le panier
        $this->articles[$nom] = $quantite;
    }

    // Méthode magique pour obtenir la quantité d'un article du panier
    public function __get($nom) {
        // Si l'article existe dans le panier, retourne sa quantité, sinon retourne 0
        return isset($this->articles[$nom]) ? $this->articles[$nom] : 0;
    }

    // Méthode magique pour vérifier si un article existe dans le panier
    public function __isset($nom) {
        // Retourne true si l'article existe dans le panier, sinon false
        return isset($this->articles[$nom]);
    }

    // Méthode magique pour supprimer un article du panier
    public function __unset($nom) {
        // Supprime l'article du panier
        unset($this->articles[$nom]);
    }

    // Méthode magique pour convertir le panier en chaîne de caractères
    public function __toString() {
        // Convertit le panier en une chaîne formatée
        $contenu = "Contenu du panier:\n";
        foreach ($this->articles as $nom => $quantite) {
            $contenu .= "{$nom}: {$quantite}\n";
        }
        return $contenu;
    }
}

// Utilisation de la classe Panier

$monPanier = new Panier();  // Crée un nouveau panier

$monPanier->pommes = 5;     // Ajoute 5 pommes au panier
$monPanier->bananes = 3;    // Ajoute 3 bananes au panier

echo $monPanier->pommes . "\n";  // Affiche la quantité de pommes (5)

$monPanier->pommes = 7;     // Modifie la quantité de pommes à 7

echo isset($monPanier->oranges) ? "Oranges sont dans le panier\n" : "Oranges ne sont pas dans le panier\n";  // Vérifie si les oranges sont dans le panier

unset($monPanier->bananes); // Supprime les bananes du panier

echo $monPanier;            // Affiche le contenu complet du panier


/*

Explications :

La classe Panier est définie avec une propriété $articles pour stocker les articles du panier.

Les méthodes magiques __set, __get, __isset, __unset et __toString sont implémentées pour permettre une interaction intuitive avec le panier.

__set est utilisé pour ajouter ou modifier la quantité d'un article dans le panier.

__get est utilisé pour obtenir la quantité d'un article. Si l'article n'existe pas, il retourne 0.

__isset vérifie si un article spécifique existe dans le panier.

__unset supprime un article du panier.

__toString convertit le panier en une chaîne formatée, montrant tous les articles et leurs quantités.

Dans la section d'utilisation, nous créons un panier, ajoutons des articles, modifions la quantité d'un article, vérifions si un article est dans le panier, supprimons un article et affichons le contenu complet du panier.

Cet exemple illustre comment les méthodes magiques peuvent être utilisées pour simplifier et rendre plus intuitive l'interaction avec un objet en POO PHP.

*/