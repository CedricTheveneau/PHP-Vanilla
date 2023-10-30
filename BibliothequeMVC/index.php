<?php
session_start();

require_once 'header.php';
require_once 'footer.php';

// Fonction debug pour checker une variable - à retirer une fois le développement terminé
function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
// debug($_SESSION);

$class = $_GET['class'];
$method = $_GET['method'];

// Récupère l'URL absolue, en tenant compte de si l'on utilise des forward ou back slash (en fonction de l'OS)
$dir = __DIR__ . DIRECTORY_SEPARATOR;
// Call le Controller qui va gérer toutes les actions
require_once 'controller/BookController.php';
require_once 'controller/AdherentController.php';

// Utilise les méthodes GET pour récupérer dynamiquement quelle action effectuer
$controller = new $class();
$controller->$method();























































// Original Code


// Démarrage de la session pour utiliser les variables de session
// session_start();

// Initialisation de la liste des livres s'il n'existe pas déjà
// if (!isset($_SESSION['livres'])) {
//     $_SESSION['livres'] = array();
// }

// require_once('header.php');
?>

<!-- <div class="container mt-5">
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
</div> -->

<!-- <?php require_once('footer.php'); ?> -->