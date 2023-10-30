<?php

// Implémentation concrète pour une pizza Margherita
class MargheritaPizza
{

    private $ready = false;

    public function prepare()
    {
        echo "Préparation de la pizza Margherita...<br/><br/>";
    }

    public function bake()
    {
        echo "Cuisson de la pizza Margherita...<br/><br/>";
    }

    public function cut()
    {
        echo "Découpage de la pizza Margherita...<br/><br/>";
    }

    public function box()
    {
        echo "Mise en boîte de la pizza Margherita...<br/><br/>";
        $this->ready = true;
    }

    public function getReady()
    {
        return $this->ready;
    }
}

// Implémentation concrète pour une pizza Pepperoni
class PepperoniPizza
{
    public function prepare()
    {
        echo "Préparation de la pizza Pepperoni...<br/><br/>";
    }

    public function bake()
    {
        echo "Cuisson de la pizza Pepperoni...<br/><br/>";
    }

    public function cut()
    {
        echo "Découpage de la pizza Pepperoni...<br/><br/>";
    }

    public function box()
    {
        echo "Mise en boîte de la pizza Pepperoni...<br/><br/>";
    }
}

// Factory pour créer des pizzas
class PizzaFactory
{
    public function createPizza(string $type)
    {
        if ($type === 'margherita') {
            return new MargheritaPizza();
        } elseif ($type === 'pepperoni') {
            return new PepperoniPizza();
        } else {
            throw new Exception("Type de pizza non reconnu");
        }
    }
}

// Classe cliente : Pizzeria
class Pizzeria
{
    private $factory;

    public function __construct(PizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type)
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}

// Utilisation
$pizzeria = new Pizzeria(new PizzaFactory());
$pizza = $pizzeria->orderPizza('margherita');

if ($pizza->getReady()) {
    echo 'Votre pizza est prête !<br/><br/>';
}
