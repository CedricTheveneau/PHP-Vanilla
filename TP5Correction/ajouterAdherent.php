<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateInscription = $_POST['dateInscription'];

    $bibliotheque->ajouterAdherent($nom, $prenom, $dateInscription);
 
    $_SESSION['message'] = "L'adhérent a été ajouté avec succès !";
    header("Location: listeAdherents.php");
    die;
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
            <label for="dateInscription">Date d'inscription:</label>
            <input type="date" class="form-control" id="dateInscription" name="dateInscription" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php require_once('footer.php'); ?>