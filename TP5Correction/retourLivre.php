<?php
session_start();

require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

$isbn = $_GET['isbn'];

$livre = $bibliotheque->getLivreByIsbn($isbn);

if ($livre) {
    $bibliotheque->retourLivre($livre);

        // Redirection vers la liste des emprunts avec un message de succès
        $_SESSION['message'] = "Le livre a été retourné avec succès !";
        header("Location: listeEmprunts.php");
        die;
}else{
        // Redirection vers la liste des emprunts avec un message d'erreur
        $_SESSION['error'] = "Erreur : L'emprunt n'a pas été trouvé.";
        header("Location: listeEmprunts.php");
        exit;
}