<?php

// Classe Exemple pour démontrer l'utilisation des méthodes magiques
class Exemple {
    private $data = [];  // Un tableau pour stocker des propriétés dynamiquement

    // Constructeur magique (__construct)
    public function __construct() {
        echo "L'objet a été créé.\n";
    }

    // Destructeur magique (__destruct)
    public function __destruct() {
        echo "L'objet est en train d'être détruit.\n";
    }

    // Méthode magique pour définir une propriété (__set)
    public function __set($name, $value) {
        echo "Définition de la propriété '{$name}' à la valeur '{$value}'.\n";
        $this->data[$name] = $value;
    }

    // Méthode magique pour obtenir une propriété (__get)
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        echo "Erreur : la propriété '{$name}' n'existe pas.\n";
    }

    // Méthode magique pour appeler une méthode (__call)
    public function __call($name, $arguments) {
        echo "Vous avez tenté d'appeler la méthode '{$name}' avec les arguments: " . implode(', ', $arguments) . ".\n";
    }

    // Méthode magique pour convertir l'objet en chaîne (__toString)
    public function __toString() {
        return "Exemple de classe avec des méthodes magiques.\n";
    }
}

// Utilisation de la classe

$objet = new Exemple();  // Crée un objet, ce qui déclenche le constructeur magique

$objet->nom = "ChatGPT";  // Définit une propriété dynamiquement, ce qui déclenche la méthode magique __set

echo $objet->nom . "\n";  // Obtient une propriété, ce qui déclenche la méthode magique __get

echo $objet->inexistant . "\n";  // Tente d'obtenir une propriété inexistante, ce qui déclenche une erreur dans __get

$objet->methodeInexistante("arg1", "arg2");  // Tente d'appeler une méthode inexistante, ce qui déclenche la méthode magique __call

echo $objet;  // Convertit l'objet en chaîne, ce qui déclenche la méthode magique __toString

// La fin du script déclenchera le destructeur magique
