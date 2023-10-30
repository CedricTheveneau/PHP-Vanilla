<?php
session_start();

// Initialisation de la session si elle n'existe pas encore
if (!isset($_SESSION['voitures'])) {
    $_SESSION['voitures'] = [];
}

// Ajout d'une nouvelle voiture


// Suppression d'une voiture
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['supprimer'])) {
    $index = $_POST['index'];
    unset($_SESSION['voitures'][$index]);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de voitures</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Liste des voitures</h2>
    <a href="addcar.php" class="btn btn-success">Ajouter</a>
    <table class="table">
        <thead>
        <tr>
            <th>Image</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['voitures'] as $index => $voiture): ?>
            <tr>
                <td><img src="<?= $voiture['image'] ?>" alt="Image de la voiture" width="100"></td>
                <td><?= $voiture['marque'] ?></td>
                <td><?= $voiture['modele'] ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
