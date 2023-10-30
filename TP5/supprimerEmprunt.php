<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

// Récupérer l'ISBN du livre à supprimer depuis l'URL
$isbn = $_GET['isbn'];

// Supprimer le livre
$bibliotheque->rendreLivre($isbn);

// Redirection vers la liste des livres
header("Location: listeEmprunts.php");
exit;
