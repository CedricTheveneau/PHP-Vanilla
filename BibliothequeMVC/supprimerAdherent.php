<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

// Récupérer l'ID de l'adhérent à supprimer depuis l'URL
$idAdherent = $_GET['id'];

// Vérifier si l'adhérent existe
$adherent = $bibliotheque->getAdherentById($idAdherent);

if ($adherent) {
    // Supprimer l'adhérent
    $bibliotheque->supprimerAdherent($idAdherent);

    // Redirection vers la liste des adhérents avec un message de succès
    $_SESSION['message'] = "L'adhérent a été supprimé avec succès !";
    header("Location: listeAdherents.php");
    exit;
} else {
    // Redirection vers la liste des adhérents avec un message d'erreur
    $_SESSION['error'] = "Erreur : L'adhérent n'a pas été trouvé.";
    header("Location: listeAdherents.php");
    exit;
}
?>

