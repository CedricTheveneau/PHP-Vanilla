<?php

require_once 'Adherent.php';
require_once 'Livre.php';
require_once 'Emprunt.php';

class Bibliotheque {

    private $livres = []; // C'est un tableau qui contient des objets de type Livre
    private $adherents = []; // C'est un tableau qui contient des objets de type Adherent
    private $emprunts = []; // C'est un tableau qui contient des objets de type Emprunt

    public function __construct(){

        if(isset($_SESSION['livres'])){
            $this->livres = array_map(function($livreSerialise){
                return unserialize($livreSerialise); // Permet de normaliser (deserialiser) un tableau de livre (normaliser = convertir un tableau en objet)
            }, $_SESSION['livres']);
        }

        if (isset($_SESSION['adherents'])) {
            $this->adherents = array_map(function($adherentsSerialise) {
                                return unserialize($adherentsSerialise);
                            }, $_SESSION['adherents']);
        }

    }

    public function getLivres(){
        return $this->livres;
    }

    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
        $_SESSION['livres'][] = serialize($livre);
    }

    public function supprimerLivre($isbn){
        foreach($this->livres as $index => $livre){
            if($livre->getIsbn() === $isbn){
                unset($this->livres[$index]);
                unset($_SESSION['livres'][$index]);
                $_SESSION['livres'] = array_values($_SESSION['livres']);
                break;
            }
        }
    }

    public function modifierLivre($isbn, $nouveauTitre, $nouvelAuteur, $nouveauNombrePages){
        foreach($this->livres as $index => $livre){
            if($livre->getIsbn() === $isbn){
                $livre->setTitre($nouveauTitre);
                $livre->setAuteur($nouvelAuteur);
                $livre->setNombrePages($nouveauNombrePages);
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }
        }
    }

    public function getLivreByIsbn($isbn) {
        foreach ($this->livres as $livre) {
            if ($livre->getIsbn() === $isbn) {
                return $livre;
            }
        }
        return null;
    }

    public function emprunterLivre($adherentId, $livreIsbn, $dateEmprunt, $dateRetourPrevu) {

        $livre = $this->getLivreByIsbn($livreIsbn);
        $livre->setIdAdherent($adherentId);
        $livre->setDateEmprunt($dateEmprunt);
        $livre->setDateRetourPrevu($dateRetourPrevu);

        foreach($this->livres as $index => $livre){
            if($livre->getIsbn() == $livreIsbn){
                $this->livres[$index] = $livre;
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }
        }

    }

    public function getAdherents() {
        return $this->adherents;
    }

    public function getEmprunts() {
        $emprunts = [];

        foreach($this->livres as $index => $livre){
            if($livre->getIdAdherent()){
                $adherent = $this->getAdherentById($livre->getIdAdherent());
                $emprunts[] = new Emprunt(time(), $adherent, $livre, $livre->getDateEmprunt(), $livre->getDateRetourPrevu());
            }
        }

        return $emprunts;
    }

    public function getAdherentById($id) {
        foreach ($this->adherents as $adherent) {
            if ($adherent->getId() == $id) {
                return $adherent;
            }
        }
        return null;
    }

    public function supprimerAdherent($idAdherent){
        foreach($this->adherents as $index => $adherent){
            if($adherent->getId() == $idAdherent){
                unset($this->adherents[$index]);
                unset($_SESSION['adherents'][$index]);
                $_SESSION['adherents'] = array_values($_SESSION['adherents']);
                break;
            }
        }   
        
    }

    public function ajouterAdherent($nom, $prenom, $dateInscription) {
        $id = time();
        $adherent = new Adherent($id, $nom, $prenom, $dateInscription);
        $this->adherents[] = $adherent;
        // Ajout de l'adherent à la session
        $_SESSION['adherents'][] = serialize($adherent);
    }

    public function retourLivre(Livre $livre)
    {
        foreach($this->livres as $index => $l){

            if($l->getIsbn() === $livre->getIsbn()){
                $livre->setIdAdherent(null);
                $_SESSION['livres'][$index] = serialize($livre);
                break;
            }

        }
    }
}

?>
