<?php
// Démarrage de la session pour utiliser les variables de session
session_start();

// Initialisation de la liste des livres s'il n'existe pas déjà
if (!isset($_SESSION['livres'])) {
    $_SESSION['livres'] = array();
}

require_once('header.php');
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Bienvenue dans le gestionnaire de bibliothèque</h1>

    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Actions disponibles</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="listeLivres.php" class="card-link">Voir la liste des livres</a></li>
                    <li class="list-group-item"><a href="ajouterLivre.php" class="card-link">Ajouter un livre</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>