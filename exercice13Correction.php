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

// Classe abstraite : Forme
abstract class Forme {
    protected $couleur;  // Couleur de la forme

    // Constructeur de la classe Forme
    public function __construct($couleur) {
        $this->couleur = $couleur;
    }

    // Méthode abstraite pour calculer l'aire
    abstract public function aire();

    // Méthode abstraite pour calculer le périmètre
    abstract public function perimetre();
}

// Classe dérivée : Carre
class Carre extends Forme {
    private $cote;  // Longueur du côté du carré

    // Constructeur de la classe Carre
    public function __construct($couleur, $cote) {
        parent::__construct($couleur);  // Appel du constructeur de la classe parente
        $this->cote = $cote;
    }

    // Implémentation de la méthode aire pour le carré
    public function aire() {
        return $this->cote * $this->cote;
    }

    // Implémentation de la méthode perimetre pour le carré
    public function perimetre() {
        return 4 * $this->cote;
    }
}

// Classe dérivée : Cercle
class Cercle extends Forme {
    private $rayon;  // Rayon du cercle

    // Constructeur de la classe Cercle
    public function __construct($couleur, $rayon) {
        parent::__construct($couleur);  // Appel du constructeur de la classe parente
        $this->rayon = $rayon;
    }

    // Implémentation de la méthode aire pour le cercle
    public function aire() {
        return pi() * $this->rayon * $this->rayon;
    }

    // Implémentation de la méthode perimetre pour le cercle
    public function perimetre() {
        return 2 * pi() * $this->rayon;
    }
}

// Bonus : Classe dérivée : Rectangle
class Rectangle extends Forme {
    private $longueur;  // Longueur du rectangle
    private $largeur;   // Largeur du rectangle

    // Constructeur de la classe Rectangle
    public function __construct($couleur, $longueur, $largeur) {
        parent::__construct($couleur);  // Appel du constructeur de la classe parente
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Implémentation de la méthode aire pour le rectangle
    public function aire() {
        return $this->longueur * $this->largeur;
    }

    // Implémentation de la méthode perimetre pour le rectangle
    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

// Utilisation des classes

$carre = new Carre("rouge", 5);
echo "Aire du carré : " . $carre->aire() . "\n";          // Affiche l'aire du carré
echo "Périmètre du carré : " . $carre->perimetre() . "\n";  // Affiche le périmètre du carré

$cercle = new Cercle("bleu", 7);
echo "Aire du cercle : " . $cercle->aire() . "\n";          // Affiche l'aire du cercle
echo "Périmètre du cercle : " . $cercle->perimetre() . "\n";  // Affiche le périmètre du cercle

// Bonus
$rectangle = new Rectangle("vert", 4, 6);
echo "Aire du rectangle : " . $rectangle->aire() . "\n";          // Affiche l'aire du rectangle
echo "Périmètre du rectangle : " . $rectangle->perimetre() . "\n";  // Affiche le périmètre du rectangle
