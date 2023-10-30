<?php
$dir = __DIR__; // Obtenez le dossier actuel
$uploadedFiles = scandir($dir); // Obtenez tous les fichiers du dossier

// echo '<pre>' . print_r($uploadedFiles, true) . '</pre>';

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Déplacez le fichier téléchargé dans le dossier actuel
    if (move_uploaded_file($file['tmp_name'], $dir . '/' . time() . '-' . $file['name'])) {
        echo "Fichier uploadé avec succès!";
    } else {
        echo "Échec de l'upload!";
    }

    // Re-scanne le dossier pour les fichiers mis à jour
    $uploadedFiles = scandir($dir);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Upload de fichier</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Uploader</button>
    </form>

    <h2>Fichiers uploadés:</h2>
    <ul>
        <?php foreach ($uploadedFiles as $file) : ?>
            <?php if (is_file($dir . '/' . $file) && $file !== 'demo.php' && $file !== 'file_icon.png') : // Vérifie si c'est un fichier et non un dossier 
            ?>
                <li>
                    <img src="file_icon.png" alt="Icone de fichier" style="width: 20px;height:20px;"> <!-- Votre icône de fichier -->
                    <?php echo htmlentities($file); ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>