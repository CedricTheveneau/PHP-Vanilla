<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

$isbn = $_GET['isbn'];

$bibliotheque->supprimerLivre($isbn);

header("Location: listeLivres.php");
exit;

?>

