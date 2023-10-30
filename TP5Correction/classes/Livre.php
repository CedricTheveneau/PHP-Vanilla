<?php

class Livre {

    public $titre;
    private $auteur;
    private $isbn;
    private $nombrePages;
    private $idAdherent = null;
    private $dateEmprunt = null;
    private $dateRetourPrevu = null;

    public function __construct($titre, $auteur, $isbn, $nombrePages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->isbn = $isbn;
        $this->nombrePages = $nombrePages;
    }

    // Getters

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getNombrePages() {
        return $this->nombrePages;
    }

    public function getIdAdherent() {
        return $this->idAdherent;
    }

    public function getDateEmprunt() {
        return $this->dateEmprunt;
    }

    public function getDateRetourPrevu() {
        return $this->dateRetourPrevu;
    }
    // Setters

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNombrePages($nombrePages) {
        $this->nombrePages = $nombrePages;
    }

    public function setIdAdherent($idAdherent) {
        $this->idAdherent = $idAdherent;
    }

    public function setDateEmprunt($dateEmprunt) {
        $this->dateEmprunt = $dateEmprunt;
    }

    public function setDateRetourPrevu($dateRetourPrevu) {
        $this->dateRetourPrevu = $dateRetourPrevu;
    }

}

?>


