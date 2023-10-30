<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/AdherentList.php';

// Initialisation de la liste d'adhérents
$adherents = new adherentList();

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $id = $_POST['id'];
    $dateInscription = $_POST['dateInscription'];

    // Création d'un nouvel objet Adherent
    $adherent = new Adherent($nom, $prenom, $dateInscription, $id);

    // Ajout du adhérent à la session
    $_SESSION['adherents'][] = serialize($adherent);

    // Redirection vers la liste des adhérents
    header("Location: listeAdherents.php");
    exit;
}

require_once('header.php');
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Ajouter un nouvel adhérent</h2>

    <form action="ajouterAdherent.php" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="number" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="dateInscription">Date d'inscription:</label>
            <input type="date" class="form-control" id="dateInscription" name="dateInscription" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php require_once('footer.php'); ?>