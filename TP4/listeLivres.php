<?php
session_start();

require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';

print_r(Bibliotheque::getBooks());

require_once('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des Livres</h2>
    <table>
        <th>
        <td width="20%" style="border: 1px solid lightgrey;text-align:center;padding:5px;">Name</td>
        <td width="20%" style="border: 1px solid lightgrey;text-align:center;padding:5px;">Author</td>
        <td width="20%" style="border: 1px solid lightgrey;text-align:center;padding:5px;">ISBN</td>
        <td width="20%" style="border: 1px solid lightgrey;text-align:center;padding:5px;">Number of Pages</td>
        <td width="20%" style="border: 1px solid lightgrey;text-align:center;padding:5px;">Actions</td>
        </th>
        <?php foreach (Bibliotheque::getBooks() as $book => $data) : ?>
            <tr>
                <td><?= print_r($book); ?></td>
                <td><?= $data["author"]; ?></td>
                <td><?= $data["isbn"]; ?></td>
                <td><?= $data["pageCount"]; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>

<?php require_once('footer.php'); ?>