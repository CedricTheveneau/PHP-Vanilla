<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();

// Récupérer l'ISBN du livre à modifier depuis l'URL
$isbn = $_GET['isbn'];

// Trouver le livre correspondant
$livreAModifier = null;
foreach ($bibliotheque->getLivres() as $livre) {
    if ($livre->getIsbn() == $isbn) {
        $livreAModifier = $livre;
        break;
    }
}

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && $livreAModifier) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $nombrePages = $_POST['nombrePages'];

    // Mettre à jour le livre
    $bibliotheque->modifierLivre($isbn, $titre, $auteur, $nombrePages);

    // Redirection vers la liste des livres
    header("Location: listeLivres.php");
    exit;
}

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Modifier les détails du livre</h2>

    <?php if ($livreAModifier): ?>
    <form action="modifierLivre.php?isbn=<?php echo $isbn; ?>" method="post">
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $livreAModifier->getTitre(); ?>" required>
        </div>
        <div class="form-group">
            <label for="auteur">Auteur:</label>
            <input type="text" class="form-control" id="auteur" name="auteur" value="<?php echo $livreAModifier->getAuteur(); ?>" required>
        </div>
        <div class="form-group">
            <label for="nombrePages">Nombre de pages:</label>
            <input type="number" class="form-control" id="nombrePages" name="nombrePages" value="<?php echo $livreAModifier->getNombrePages(); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
    <?php else: ?>
    <p class="alert alert-danger">Le livre demandé n'a pas été trouvé.</p>
    <?php endif; ?>
</div>

<?php require_once('footer.php'); ?>