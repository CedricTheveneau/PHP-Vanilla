<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>

<body>
    <main>Add a movie</main>
    <form action="" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>
        <label for="image">Image</label>
        <input type="url" name="image" id="image" required>
        <button type="submit">Add</button>
    </form>
</body>

</html>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['title'])) {
        array_push($_SESSION['films'], ['titre' => $_POST["title"], 'description' => $_POST["description"], 'image' => $_POST["image"]]);
        header('Location: index.php');
        die();
    }
}

?>