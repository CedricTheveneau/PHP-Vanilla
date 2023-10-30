<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page de connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="" method="POST" style="width: 30%;display:grid;margin:20px auto;">
        <div class="formRow" style="display: grid;gap: 5px;margin-bottom:8px;">
            <label for="email">Email adress :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="formRow" style="display: grid;gap: 5px;margin-bottom:8px;">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="formRow" style="display: grid;gap: 5px;margin-bottom:25px;">
            <label for="password">Age :</label>
            <input type="number" name="age" id="age" required>
        </div>
        <div class="formRow" style="display: grid;">
            <button type="submit">Connexion</button>
        </div>
    </form>
</body>

</html>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $userAge = $_POST["age"];
    $_SESSION["user"][$userEmail] = [
        'password' => $userPassword,
        'age' => $userAge
    ];
    header('Location: nav.php');
    die();
}
// Page de connexion

// Tous les champs sont required
// Bouton "Remember me" non obligatoire -- Bonus ?
?>