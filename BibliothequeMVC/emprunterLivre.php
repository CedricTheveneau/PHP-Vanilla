<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Adherent.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adherentId = $_POST['adherentId'];
    $livreIsbn = $_POST['livreIsbn'];
    $dateEmprunt = date("Y-m-d"); // Date du jour
    $dateRetourPrevu = date("Y-m-d", strtotime("+2 weeks")); // Date de retour prévue dans 2 semaines

    // Emprunter le livre
    $bibliotheque->emprunterLivre($adherentId, $livreIsbn, $dateEmprunt, $dateRetourPrevu);

    // Redirection vers la liste des emprunts avec un message de succès
    $_SESSION['message'] = "Le livre a été emprunté avec succès !";
    header("Location: listeEmprunts.php");
    exit;
}

$adherents = $bibliotheque->getAdherents();
$livres = $bibliotheque->getLivres();

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Emprunter un livre</h2>

    <form action="emprunterLivre.php" method="post">
        <div class="form-group">
            <label for="adherentId">Adhérent:</label>
            <select class="form-control" id="adherentId" name="adherentId" required>
                <?php foreach ($adherents as $adherent): ?>
                    <option value="<?= $adherent->getId() ?>"><?= $adherent->getNom() . ' ' . $adherent->getPrenom() ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="livreIsbn">Livre:</label>
            <select class="form-control" id="livreIsbn" name="livreIsbn" required>
                <?php foreach ($livres as $livre): ?>
                    <option value="<?= $livre->getIsbn() ?>"><?= $livre->getTitre() ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Emprunter</button>
    </form>
</div>

<?php require_once('footer.php'); ?>