<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/AdherentList.php';

$adherentList = new AdherentList();

// Récupérer l'ID de l'adhérent à supprimer depuis l'URL
$id = $_GET['id'];

// Supprimer l'adhérent
$adherentList->supprimerAdherent($id);

// Redirection vers la liste des adhérents
header("Location: listeAdherents.php");
exit;
