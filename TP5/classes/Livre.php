<?php

class Livre
{
    private $titre;
    private $auteur;
    private $isbn;
    private $nombrePages;
    private $emprunt;

    public function __construct($titre, $auteur, $isbn, $nombrePages)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->isbn = $isbn;
        $this->nombrePages = $nombrePages;
        $this->emprunt = null;
    }

    // Getters
    public function getTitre()
    {
        return $this->titre;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getNombrePages()
    {
        return $this->nombrePages;
    }

    public function getEmprunt()
    {
        return $this->emprunt;
    }

    // Setters
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function setNombrePages($nombrePages)
    {
        $this->nombrePages = $nombrePages;
    }

    public function setEmprunt($emprunt)
    {
        $this->emprunt = $emprunt;
    }
}
