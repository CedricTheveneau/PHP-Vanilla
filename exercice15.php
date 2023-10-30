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

class Employee
{
    public $name;
    public $job;
    private $id;
    private static $employeeCount = 0;

    public function __construct($name, $job)
    {
        $this->name = $name;
        $this->job = $job;
        self::$employeeCount = Employee::getEmployeeCount() + 1;
        $this->id = Employee::getEmployeeCount();
    }

    public function getId()
    {
        return $this->id;
    }

    public static function getEmployeeCount()
    {
        return self::$employeeCount;
    }
}

$sam = new Employee('Sam', 'Designer');
echo $sam->getId() . "<br/>";

$mike = new Employee('Mike', 'Developer');
echo $mike->getId() . "<br/>";

$charlie = new Employee('Charlie', 'Head of Sales');
echo $charlie->getId() . "<br/>";

echo Employee::getEmployeeCount();
