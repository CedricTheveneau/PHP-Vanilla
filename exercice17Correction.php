<?php

/*
Exercice : Refactoring avec le Design Pattern Observer
Contexte :
Vous avez hérité d'un code pour une application de gestion de stock. Actuellement, le code met à jour manuellement plusieurs composants de l'interface utilisateur chaque fois que le stock change. Votre tâche est de refactoriser ce code en utilisant le design pattern Observer pour automatiser et simplifier la mise à jour des composants.

Code de base :

class Stock {
    public $quantity;

    public function __construct($quantity) {
        $this->quantity = $quantity;
    }

    public function increaseStock($amount) {
        $this->quantity += $amount;
        // Mise à jour manuelle des composants
        $this->updateTable();
        $this->updateGraph();
        $this->updateSummary();
    }

    public function decreaseStock($amount) {
        $this->quantity -= $amount;
        // Mise à jour manuelle des composants
        $this->updateTable();
        $this->updateGraph();
        $this->updateSummary();
    }

    public function updateTable() {
        echo "Table mise à jour.\n";
    }

    public function updateGraph() {
        echo "Graphique mis à jour.\n";
    }

    public function updateSummary() {
        echo "Résumé mis à jour.\n";
    }
}

$stock = new Stock(100);
$stock->increaseStock(20);


Instructions :

Ajoutez une propriété $observers à la classe Stock pour stocker une liste d'observateurs.
Ajoutez des méthodes registerObserver, removeObserver et notifyObservers à la classe Stock. Elle devrait notifier les observateurs chaque fois que le stock change.
Créez des classes pour les composants de l'interface utilisateur (Table, Graph, Summary). Chaque classe doit avoir une méthode update qui met à jour son affichage.
Écrivez un script de démonstration où vous créez une instance de Stock, plusieurs observateurs, puis modifiez le stock et observez comment chaque observateur est automatiquement mis à jour.

Objectif :
Après avoir terminé cet exercice, le code devrait être plus flexible et extensible. L'ajout, la suppression ou la modification des composants de l'interface utilisateur devrait être plus facile sans avoir à modifier la classe Stock.

*/

// Correction :


class Stock
{
    public $quantity;
    private $observers = [];

    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    public function registerObserver($observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver($observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->quantity);
        }
    }

    public function increaseStock($amount)
    {
        $this->quantity += $amount;
        $this->notifyObservers();
    }

    public function decreaseStock($amount)
    {
        $this->quantity -= $amount;
        $this->notifyObservers();
    }
}


class Table
{
    public function update($quantity)
    {
        echo "Table mise à jour. Quantité actuelle : " . $quantity . "\n";
    }
}

class Graph
{
    public function update($quantity)
    {
        echo "Graphique mis à jour avec la nouvelle quantité : " . $quantity . "\n";
    }
}

class Summary
{
    public function update($quantity)
    {
        echo "Résumé mis à jour. Stock actuel : " . $quantity . "\n";
    }
}


$stock = new Stock(100);

$table = new Table();
$graph = new Graph();
$summary = new Summary();

$stock->registerObserver($table);
$stock->registerObserver($graph);
$stock->registerObserver($summary);

$stock->increaseStock(20);
$stock->decreaseStock(10);
