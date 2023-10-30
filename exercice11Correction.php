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
 

 // Définition de la classe CompteBancaire
 class CompteBancaire {
     // Propriétés de la classe
     private $titulaire;  // Le nom du titulaire du compte
     private $solde;      // Le montant actuel sur le compte
     private $type;       // Le type de compte (par exemple : "courant", "épargne")
 
     // Constructeur de la classe
     public function __construct($titulaire, $type = "courant") {
         $this->titulaire = $titulaire;  // Initialisation du titulaire
         $this->solde = 0;               // Initialisation du solde à 0
         $this->type = $type;            // Initialisation du type de compte
     }
 
     // Méthode pour effectuer un dépôt
     public function depot($montant) {
         $this->solde += $montant;  // Ajoute le montant au solde
     }
 
     // Méthode pour effectuer un retrait
     public function retrait($montant) {
         // Vérifie si le solde est suffisant pour le retrait
         if ($this->solde >= $montant) {
             $this->solde -= $montant;  // Retire le montant du solde
         } else {
             echo "Solde insuffisant pour effectuer le retrait.\n";
         }
     }
 
     // Méthode pour afficher le solde
     public function afficherSolde() {
         echo "Le solde du compte {$this->type} de {$this->titulaire} est de {$this->solde}€.\n";
     }
 }
 
 // Utilisation de la classe CompteBancaire
 
 $compte1 = new CompteBancaire("Alice");  // Création d'un objet compte1 pour Alice avec un type de compte par défaut "courant"
 $compte1->depot(500);                    // Effectue un dépôt de 500€ sur compte1
 $compte1->retrait(200);                  // Effectue un retrait de 200€ sur compte1
 $compte1->afficherSolde();               // Affiche le solde de compte1
 
 $compte1->retrait(400);                  // Essaye de retirer 400€ de compte1. Cela affichera un message d'erreur car le solde est insuffisant.
