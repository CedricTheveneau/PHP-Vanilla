<?php
session_start();

if (!isset($_GET['id']) || !isset($_SESSION['films'][$_GET['id']])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$film = $_SESSION['films'][$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];
    $_SESSION['films'][$id]['description'] = $description;
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éditer un film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="editer.php?id=<?= $id ?>">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?= $film['titre'] ?>" disabled>
            </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?= $film['description'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
</body>
</html>
