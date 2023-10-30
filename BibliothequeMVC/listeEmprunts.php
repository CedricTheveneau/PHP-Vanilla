<?php
session_start();

require_once 'classes/Bibliotheque.php';

$bibliotheque = new Bibliotheque();
$emprunts = $bibliotheque->getEmprunts();

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des Emprunts</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Adhérent</th>
                <th>Livre emprunté</th>
                <th>Date d'emprunt</th>
                <th>Date de retour prévue</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprunts as $emprunt): ?>
                <tr>
                    <td><?php echo $emprunt->getAdherent()->getNom() . ' ' . $emprunt->getAdherent()->getPrenom(); ?></td>
                    <td><?php echo $emprunt->getLivre()->getTitre(); ?></td>
                    <td><?php echo $emprunt->getDateEmprunt(); ?></td>
                    <td><?php echo $emprunt->getDateRetourPrevu(); ?></td>
                    <td>
                        <a href="retourLivre.php?isbn=<?php echo $emprunt->getLivre()->getIsbn(); ?>" class="btn btn-success btn-sm">Retourner le livre</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>