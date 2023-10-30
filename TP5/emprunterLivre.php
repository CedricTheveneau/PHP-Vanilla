<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';
require_once 'classes/Adherent.php';
require_once 'classes/AdherentList.php';

// Initialisation de la bibliothèque
$bibliotheque = new Bibliotheque();
$livres = $bibliotheque->getLivresNonEmpruntes();
$adherentList = new adherentList();
$adherents = $adherentList->getAdherents();

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $borrowerId = $_POST['borrowerId'];
    $borrowedBook = $_POST['borrowedBook'];
    echo $borrowerId . " : à emprunté" . $borrowedBook;

    // Création d'un nouvel objet Livre
    $bibliotheque->emprunterLivre($borrowedBook, $borrowerId);
    // Redirection vers la liste des livres
    header("Location: listeEmprunts.php");
    exit;
}

require_once('header.php');
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Emprunter un livre</h2>

    <form action="emprunterLivre.php" method="post">
        <div class="form-group">
            <label for="borrowerId">Adhérent empruntant le livre:</label>
            <select required name="borrowerId" id="borrowerId">
                <?php foreach ($adherents as $adherent) : ?>
                    <option value=<?php echo $adherent->getId(); ?>><?php echo $adherent->getPrenom(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="borrowedBook">Livre emprunté:</label>
            <select required name="borrowedBook" id="borrowedBook">
                <?php foreach ($livres as $livre) : ?>
                    <option value=<?php echo $livre->getIsbn(); ?>><?php echo $livre->getTitre(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Emprunter</button>
    </form>
</div>

<?php require_once('footer.php'); ?>