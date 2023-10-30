<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['description'])) {
        $_SESSION['films'][$_GET['id']] = ['titre' => $_SESSION['films'][$_GET['id']]['titre'], 'description' => $_POST["description"], 'image' => $_SESSION['films'][$_GET['id']]['image']];
        header('Location: index.php');
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <main>Edit a movie</main>
    <form action="" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value=<?= $_SESSION['films'][$_GET['id']]['titre']; ?> disabled>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>
        <button type="submit">Save changes</button>
    </form>
</body>

</html>