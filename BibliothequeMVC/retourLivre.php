<?php
session_start();

require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

// Récupérer l'ID de l'emprunt depuis l'URL
$isbn = $_GET['isbn'];

// Vérifier si l'emprunt existe
$livre = $bibliotheque->getLivreByIsbn($isbn);

if ($livre) {
    // Gérer le retour du livre
    $bibliotheque->retourLivre($livre);

    // Redirection vers la liste des emprunts avec un message de succès
    $_SESSION['message'] = "Le livre a été retourné avec succès !";
    header("Location: listeEmprunts.php");
    exit;
} else {
    // Redirection vers la liste des emprunts avec un message d'erreur
    $_SESSION['error'] = "Erreur : L'emprunt n'a pas été trouvé.";
    header("Location: listeEmprunts.php");
    exit;
}
?>

