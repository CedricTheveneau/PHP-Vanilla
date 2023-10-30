<?php
session_start();

require_once('classes/Livre.php');
require_once('classes/Bibliotheque.php');

$bibliotheque = new Bibliotheque();
$livres = $bibliotheque->getLivres();

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des Livres</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>ISBN</th>
                <th>Nombre de pages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livres as $livre): ?>
                <tr>
                    <td><?php echo $livre->getTitre(); ?></td>
                    <td><?php echo $livre->getAuteur(); ?></td>
                    <td><?php echo $livre->getIsbn(); ?></td>
                    <td><?php echo $livre->getNombrePages(); ?></td>
                    <td>
                        <a href="modifierLivre.php?isbn=<?php echo $livre->getIsbn(); ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="supprimerLivre.php?isbn=<?php echo $livre->getIsbn(); ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>