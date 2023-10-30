<?php

require_once 'Livre.php';

class Bibliotheque
{
    private $livres = array();
    private $nonBorrowedLivres = array();
    private $borrowedLivres = array();

    public function __construct()
    {
        // Si des livres sont déjà stockés dans la session, les récupérer
        if (isset($_SESSION['livres'])) {
            $this->livres = array_map(function ($livreSerialise) {
                return unserialize($livreSerialise);
            }, $_SESSION['livres']);
        }
    }

    // Ajouter un livre à la bibliothèque
    public function ajouterLivre(Livre $livre)
    {
        $this->livres[] = $livre;
        $_SESSION['livres'][] = serialize($livre);
    }

    // Récupérer la liste des livres
    public function getLivres()
    {
        return $this->livres;
    }

    // Récupérer la liste des livres empruntés
    public function getLivresEmpruntes()
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getEmprunt() !== null) {
                $this->borrowedLivres[] = $livre;
            }
        }
        return $this->borrowedLivres;
    }

    // Récupérer la liste des livres non empruntés
    public function getLivresNonEmpruntes()
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getEmprunt() == null) {
                $this->nonBorrowedLivres[] = $livre;
            }
        }
        return $this->nonBorrowedLivres;
    }

    // Supprimer un livre de la bibliothèque
    public function supprimerLivre($isbn)
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getIsbn() == $isbn) {
                unset($this->livres[$index]);
                unset($_SESSION['livres'][$index]);
                $_SESSION['livres'] = array_values($_SESSION['livres']); // Réindexer le tableau
                break;
            }
        }
    }

    // Modifier un livre existant
    public function modifierLivre($isbn, $nouveauTitre, $nouvelAuteur, $nouveauNombrePages)
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getIsbn() == $isbn) {
                $livre->setTitre($nouveauTitre);
                $livre->setAuteur($nouvelAuteur);
                $livre->setNombrePages($nouveauNombrePages);
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }
        }
    }

    // Emprunter un livre
    public function emprunterLivre($isbn, $memberId)
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getIsbn() == $isbn) {
                $livre->setEmprunt($memberId);
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }
        }
    }

    // Rendre un livre
    public function rendreLivre($isbn)
    {
        foreach ($this->livres as $index => $livre) {
            if ($livre->getIsbn() == $isbn) {
                $livre->setEmprunt(null);
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }
        }
    }
}
