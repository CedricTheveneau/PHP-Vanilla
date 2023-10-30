<?php
session_start();
require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        Bibliotheque::addBook(new Livre($_POST["name"], $_POST["author"], $_POST["isbn"], $_POST["pageCount"]));
        // $_SESSION['books']->addBook(new Livre($_POST["name"], $_POST["author"], $_POST["isbn"], $_POST["pageCount"]));
        // var_dump($_SESSION['books']);
        // header('Location: listeLivres.php');
        // die();
    }
}


require_once('header.php');
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Ajouter un nouveau livre</h2>

    <form action="ajouterLivre.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="pageCount">Number of pages:</label>
            <input type="number" class="form-control" id="pageCount" name="pageCount" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php require_once('footer.php'); ?>