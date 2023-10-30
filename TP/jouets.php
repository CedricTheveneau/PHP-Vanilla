<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['disconnect'])) {
        unset($_SESSION['user']);
        // header("Location:" . __DIR__ . "/index.php");
        header('Location: index.php');
        die();
    }
}

if (!isset($_SESSION['user'])) {
    $url = "index.php";
    $url .= '?error=you-were-not-logged-in-hence-why-you-got-redirected-towards-the-login-page';
    header('Location:' . $url);
    die();
}
// Page jouets / Accessible uniquement aux personnes mineures

// Cards avec jouets
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jouets</title>
</head>

<body>
    <header>
        <h1>Jouets</h1>
        <nav>
            <ul>
                <li>
                    <form action="" method="POST"><button type="submit" name="disconnect">Déconnexion</button></form>
                </li>
                <li><button><a href="nav.php">Navigation</a></button></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php if (isset($_SESSION['user'])) : ?>
            <?php foreach ($_SESSION['user'] as $userEmail => $data) : ?>
                <?php if ($data['age'] > 18) : ?>
                    <?php
                    echo $userEmail . "'s age is " . $data['age'] . ". This person doesn't meet our age requirements to access this section of the wesbite.";
                    ?>
                <?php endif; ?>
                <?php if ($data['age'] < 18) : ?>
                    <?php
                    echo "Here are our toys : ";
                    ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
</body>

</html>