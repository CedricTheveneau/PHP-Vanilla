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
    private $quantity = 0;
    private $observers = [];

    public function addObservers(stockObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObservers(stockObserver $observer)
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

class stockObserver
{
    private $quantity = 0;
    private $appareil;

    public function __construct($appareil)
    {
        $this->appareil = $appareil;
        $this->display($this->quantity);
    }

    public function update($quantity)
    {
        $this->quantity = $quantity;
        $this->display($this->quantity);
    }

    public function display($amount)
    {
        $table = new Table;
        $graph = new Graph;
        $summary = new Summary;
        $table->update($amount);
        $graph->update($amount);
        $summary->update($amount);
        echo "<br/>{$this->appareil} - Informations actuelles : Table : {$table->getData()}, Graph : {$graph->getData()}, Summary : {$summary->getData()}. General : {$this->quantity}<br/>";
    }
}

class Table
{
    private $data;
    public function update($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Graph
{
    private $data;
    public function update($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
}

class Summary
{
    private $data;
    public function update($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
}

$stock = new Stock();
$currentDisplay1 = new stockObserver('Ecran principal');
$currentDisplay2 = new stockObserver('Ordinateur');
$currentDisplay3 = new stockObserver('Tablette');

$stock->addObservers($currentDisplay1);
$stock->addObservers($currentDisplay2);
$stock->addObservers($currentDisplay3);

$stock->increaseStock(25);
$stock->decreaseStock(5);
$stock->decreaseStock(15);
$stock->increaseStock(62);
