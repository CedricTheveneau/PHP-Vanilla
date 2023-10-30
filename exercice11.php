<?php

/*
Enoncé de l'exercice : 


Exercice : Création d'une classe Banque
Objectif : Créer une classe CompteBancaire qui permet de gérer un compte en banque.

Instructions :

Création de la classe CompteBancaire :

La classe doit avoir les propriétés suivantes :
titulaire (le nom du titulaire du compte)
solde (le montant actuel sur le compte)
La classe doit avoir un constructeur qui prend le titulaire comme argument et initialise le solde à 0.
La classe doit avoir les méthodes suivantes :
depot($montant) : ajoute un montant au solde.
retrait($montant) : retire un montant du solde. Si le solde est insuffisant, affichez un message d'erreur.
afficherSolde() : affiche le solde actuel du compte.
Utilisation de la classe :

Créez un objet compte1 pour un titulaire nommé "Alice".
Effectuez un dépôt de 500€ sur compte1.
Effectuez un retrait de 200€ sur compte1.
Affichez le solde de compte1.
Essayez de retirer 400€ de compte1 et observez le message d'erreur.

 */


// Correction :

class BankAccount
{
    public $owner;
    private $balance;

    public function __construct($owner)
    {
        $this->owner = $owner;
        $this->balance = 0;
    }

    public function deposite($amount)
    {
        $this->balance += $amount;
    }

    public function withdrawal($amount)
    {
        if ($this->balance < $amount) {
            echo "CANCELED : Your withdrawal was higher than your balance. Your balance currently is : " . $this->balance;
        } else {
            $this->balance -= $amount;
        }
    }

    public function showBalance()
    {
        echo $this->balance;
    }
}

$aliceAccount = new BankAccount('Alice');

var_dump($aliceAccount);
echo '<br/>';
$aliceAccount->deposite(500);
$aliceAccount->showBalance();
echo '<br/>';
$aliceAccount->withdrawal(200);
$aliceAccount->showBalance();
echo '<br/>';
// Will purposely create an error because the balance is inferior to the withdrawal.
$aliceAccount->withdrawal(400);
echo '<br/>';
$aliceAccount->showBalance();
// Observed issue : The balance is negative. Fixed this issue with a condition in the function.