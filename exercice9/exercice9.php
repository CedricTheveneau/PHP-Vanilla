<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading files with phpS</title>
</head>

<body>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="sendFile" id="sendFile">
        <button type="submit">Send</button>
    </form>
    <?php
    $directory = __DIR__ . '\uploads';

    $uploads = scandir($directory);

    echo "<h2>Uploaded files : </h2>";
    foreach ($uploads as $upload => $info) {
        if (is_file($info)) {
            echo "<p>&#x1F5CE; $info</p>";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['sendfile'])) {
            $fileName =  $_FILES['sendFile']['name'];
            $filePath = $directory . '/' . $fileName;
            //Variable qui récupère le dossier et le fichier envoyés à $filePath
            //Utilisation de la fonction move_uploaded_file pôur envoyer le fichier upload dans le dossier $directory
            move_uploaded_file($_FILES['sendFile']['tmp_name'], $filePath);
        }
    }
    ?>
</body>

</html>