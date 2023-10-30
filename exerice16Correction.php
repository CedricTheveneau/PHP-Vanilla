<?php

/*
Enoncé de l'exercice : 

Exercice : Refactoring avec le Design Pattern Factory
Contexte :
Vous avez hérité d'un code pour une application de gestion d'animaux dans un zoo. Actuellement, le code crée différents types d'animaux directement dans la classe principale. Votre tâche est de refactoriser ce code en utilisant le design pattern Factory pour améliorer la modularité et la flexibilité.

Code de base :


class Zoo {
    public function createAnimal($type) {
        if ($type === 'lion') {
            return new Lion();
        } elseif ($type === 'elephant') {
            return new Elephant();
        } elseif ($type === 'giraffe') {
            return new Giraffe();
        } else {
            throw new Exception("Type d'animal non reconnu");
        }
    }
}

class Lion {
    public function roar() {
        echo "Roar!\n";
    }
}

class Elephant {
    public function trumpet() {
        echo "Toot!\n";
    }
}

class Giraffe {
    public function munch() {
        echo "Munch munch...\n";
    }
}

$zoo = new Zoo();
$lion = $zoo->createAnimal('lion');
$lion->roar();


Instructions :

Créez une interface Animal qui définit une méthode makeSound().
Modifiez les classes Lion, Elephant et Giraffe pour qu'elles implémentent l'interface Animal. Chaque classe doit avoir une implémentation spécifique de la méthode makeSound().
Créez la classe AnimalFactory qui a une méthode createAnimal($type). Cette méthode doit retourner une instance du type d'animal spécifié.
Refactorisez la classe Zoo pour qu'elle utilise la AnimalFactory pour créer des animaux au lieu de le faire directement.
Écrivez un script de démonstration où vous créez différents types d'animaux en utilisant la classe Zoo refactorisée, puis faites en sorte que chaque animal émette un son.
*/

// Correction : 

class Lion
{

    public function roar()
    {
        echo "Roar!\n";
    }
}

class Elephant
{
    public function trumpet()
    {
        echo "Toot!\n";
    }
}

class Giraffe
{
    public function munch()
    {
        echo "Munch munch...\n";
    }
}

class AnimalFactory
{

    public function createAnimal($type)
    {
        if ($type === 'lion') {
            return new Lion();
        } elseif ($type === 'elephant') {
            return new Elephant();
        } elseif ($type === 'giraffe') {
            return new Giraffe();
        } else {
            throw new Exception("Type d'animal non reconnu");
        }
    }
}

class Zoo
{

    private $factory;
    private $animaux = [];

    public function __construct(AnimalFactory $factory)
    {
        $this->factory = $factory;
    }

    public function addAnimal($type)
    {
        $this->animaux[] = $this->factory->createAnimal($type);
    }

    public function getAnimaux()
    {
        return $this->animaux;
    }
}

$animalFactory = new AnimalFactory();
$zoo = new Zoo($animalFactory);

$zoo->addAnimal('lion');
$zoo->addAnimal('elephant');
$zoo->addAnimal('giraffe');

$animaux = $zoo->getAnimaux();

echo "Vous avez " . count($animaux) . " d'animaux dans votre zoo, les voici :<br/><br/>";

foreach ($animaux as $animal) {
    echo '<br/>- ' . $animal::class . '<br/><br/>';
}
