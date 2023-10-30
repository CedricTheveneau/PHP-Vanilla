<?php

/*
Enoncé de l'exercice :

Exercice : Gestion des Formes Géométriques
Objectif : Créer un ensemble de classes pour gérer différentes formes géométriques en utilisant le concept de classes abstraites.

Instructions :

Classe abstraite Forme :
Propriétés : couleur.
Constructeur : Initialise la propriété couleur.
Méthode abstraite aire : Cette méthode doit retourner l'aire de la forme.
Méthode abstraite perimetre : Cette méthode doit retourner le périmètre de la forme.

Classe dérivée Carre :
Hérite de la classe Forme.
Propriété supplémentaire : cote (longueur du côté du carré).
Constructeur : Initialise la couleur et le cote.
Implémentation des méthodes aire et perimetre pour le carré.

Classe dérivée Cercle :
Hérite de la classe Forme.
Propriété supplémentaire : rayon.
Constructeur : Initialise la couleur et le rayon.
Implémentation des méthodes aire et perimetre pour le cercle.

Utilisation des classes :
Créez un objet de type Carre et un objet de type Cercle.
Affichez l'aire et le périmètre de chaque objet.

*/

// Correction : 

abstract class Form
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function area();
    abstract public function perimeter();
}

class Square extends Form
{
    public $side;

    public function __construct($color, $side)
    {
        parent::__construct($color);
        $this->side = $side;
    }

    public function area()
    {
        echo $this->side * $this->side;
    }

    public function perimeter()
    {
        echo $this->side * 4;
    }
}

class Circle extends Form
{
    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function area()
    {
        echo M_PI * ($this->radius * $this->radius);
    }

    public function perimeter()
    {
        echo 2 * M_PI * $this->radius;
    }
}

$square = new Square('blue', 10);
$square->area();
echo "<br/>";
$square->perimeter();
echo "<br/>";
echo "<br/>";
$circle = new Circle('red', 5);
$circle->area();
echo "<br/>";
$circle->perimeter();
