<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nav</title>
</head>

<body>
    <header>
        <h1>Navigation</h1>
        <nav>
            <ul>
                <li>
                    <form action="" method="POST"><button type="submit" name="disconnect">Déconnexion</button></form>
                </li>
                <li><button><a href="articles.php">Articles</a></button></li>
                <li><button><a href="films.php">Films</a></button></li>
                <li><button><a href="manga.php">Manga</a></button></li>
                <li><button><a href="anime.php">Anime</a></button></li>
                <li><button><a href="jouets.php">Jouets</a></button></li>
            </ul>
        </nav>
    </header>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION['user'])) {
    $url = "index.php";
    $url .= '?error=you-were-not-logged-in-hence-why-you-got-redirected-towards-the-login-page';
    header('Location:' . $url);
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['disconnect'])) {
        unset($_SESSION['user']);
        // header("Location:" . __DIR__ . "/index.php");
        header('Location: index.php');
        die();
    }
}
// Page de navigation

// Navbar avec : Déconnexion (Supression de la session), Articles, Films, Manga, Anime, Jouets

// function redirect($relativeUrl)
// {
//     header('Location :' . $relativeUrl);
// }

// redirect('manga.php');
