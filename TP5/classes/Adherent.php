<?php

class Adherent
{
    private $nom;
    private $prenom;
    private $dateInscription;
    private $id;

    public function __construct($nom, $prenom, $dateInscription, $id)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateInscription = $dateInscription;
        $this->id = $id;
    }

    // Getters
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function getId()
    {
        return $this->id;
    }

    // Setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }
}
