<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

$idAdherent = $_GET['id'];

$adherent = $bibliotheque->getAdherentById($idAdherent);


if ($adherent) {
    $bibliotheque->supprimerAdherent($idAdherent);
    $_SESSION['error'] = "Erreur : L'adhérent a été supprimé avec succès !";
    header("Location: listeAdherents.php");
    die;
}else{
    $_SESSION['error'] = "Erreur : L'adhérent n'a pas été trouvé.";
    header("Location: listeAdherents.php");
    exit; 
}