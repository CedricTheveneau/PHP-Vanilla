<?php

require_once 'Adherent.php';

class adherentList
{
    private $adherents = array();

    public function __construct()
    {
        // Si des adhérents sont déjà stockés dans la session, les récupérer
        if (isset($_SESSION['adherents'])) {
            $this->adherents = array_map(function ($adherentSerialise) {
                return unserialize($adherentSerialise);
            }, $_SESSION['adherents']);
        }
    }

    // Ajouter un adhérent à la liste
    public function ajouterAdherent(Adherent $adherent)
    {
        $this->adherents[] = $adherent;
        $_SESSION['adherents'][] = serialize($adherent);
    }

    // Récupérer la liste des adhérents
    public function getAdherents()
    {
        return $this->adherents;
    }

    // Supprimer un adhérent de la liste
    public function supprimerAdherent($id)
    {
        foreach ($this->adherents as $index => $adherent) {
            if ($adherent->getId() == $id) {
                unset($this->adherents[$index]);
                unset($_SESSION['adherents'][$index]);
                $_SESSION['adherents'] = array_values($_SESSION['adherents']); // Réindexer le tableau
                break;
            }
        }
    }

    // Modifier un adhérent existant
    public function modifierAdherent($id, $nouveauNom, $nouveauPrenom)
    {
        foreach ($this->adherents as $index => $adherent) {
            if ($adherent->getId() == $id) {
                $adherent->setNom($nouveauNom);
                $adherent->setPrenom($nouveauPrenom);
                $_SESSION['adherents'][$index] = serialize($adherent);
                break;
            }
        }
    }
}
