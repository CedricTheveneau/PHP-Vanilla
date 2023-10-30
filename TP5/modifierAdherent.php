<?php
session_start();

require_once 'classes/Adherent.php';
require_once 'classes/AdherentList.php';

$adherentList = new AdherentList();

// Récupérer l'ID de l'adhérent à modifier depuis l'URL
$id = $_GET['id'];

// Trouver l'adhérent correspondant
$adherentAModifier = null;
foreach ($adherentList->getAdherents() as $adherent) {
    if ($adherent->getId() == $id) {
        $adherentAModifier = $adherent;
        break;
    }
}

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && $adherentAModifier) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // Mettre à jour l'adhérent
    $adherentList->modifierAdherent($id, $nom, $prenom);

    // Redirection vers la liste des adhérents
    header("Location: listeAdherents.php");
    exit;
}

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Modifier les informations de l'adhérent</h2>

    <?php if ($adherentAModifier) : ?>
        <form action="modifierAdherent.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $adherentAModifier->getNom(); ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $adherentAModifier->getPrenom(); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    <?php else : ?>
        <p class="alert alert-danger">L'adhérent demandé n'a pas été trouvé.</p>
    <?php endif; ?>
</div>

<?php require_once('footer.php'); ?>