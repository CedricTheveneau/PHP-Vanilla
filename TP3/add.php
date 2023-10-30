<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add product</title>
</head>

<body>
    <main>
        <h2>Add a product</h2>
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><a href="backoffice.php">Back-office</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li>Add product</li>
            </ul>
        </div>
        <form action="" method="POST">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
            <label for="image">Image</label>
            <input type="url" name="image" id="image" required>
            <button type="submit">Add</button>
        </form>
    </main>
</body>

</html>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['title'])) {
        array_push($_SESSION['products'], ['title' => $_POST["title"], 'description' => $_POST["description"], 'image' => $_POST["image"]]);
        header('Location: backoffice.php');
        die();
    }
}

?>