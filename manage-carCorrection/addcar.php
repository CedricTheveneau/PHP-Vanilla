<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajouter'])) {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $image = $_POST['image'];

    $_SESSION['voitures'][] = [
        'marque' => $marque,
        'modele' => $modele,
        'image' => $image
    ];

    header("Location: index.php");
    die;
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
    <div class="container mt-3">
        <h2>Ajouter une voiture</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="marque">Marque:</label>
                <input type="text" class="form-control" id="marque" name="marque" required>
            </div>
            <div class="form-group">
                <label for="modele">Modèle:</label>
                <input type="text" class="form-control" id="modele" name="modele" required>
            </div>
            <div class="form-group">
                <label for="image">URL de l'image:</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
        </form>        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
