<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';
require_once 'classes/Adherent.php';
require_once 'classes/AdherentList.php';

$bibliotheque = new Bibliotheque();
$livresEmpruntes = $bibliotheque->getLivresEmpruntes();
$adherentList = new adherentList();
$adherents = $adherentList->getAdherents();

// if (array_intersect($livresEmpruntes, $adherents)) {
//     print_r(array_intersect($livresEmpruntes, $adherents));
// } else {
//     // $bibliotheque->rendreLivre($livre->getIsbn());
//     echo "No match found";
// }

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des livres empruntés</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Emprunté par</th>
                <th>ISBN</th>
                <th>Nombre de pages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livresEmpruntes as $livre) : ?>
                <tr>
                    <td><?php echo $livre->getTitre(); ?></td>
                    <td><?php echo $livre->getAuteur(); ?></td>
                    <td><?php echo $livre->getEmprunt(); ?></td>
                    <td><?php echo $livre->getIsbn(); ?></td>
                    <td><?php echo $livre->getNombrePages(); ?></td>
                    <td>
                        <a href="supprimerEmprunt.php?isbn=<?php echo $livre->getIsbn(); ?>" class="btn btn-info btn-sm">Rendre le livre</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>