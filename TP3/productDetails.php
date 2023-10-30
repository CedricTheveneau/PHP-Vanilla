<?php

// 2 - Page de Détails du Produit :
// Détails d'un produit spécifique.

session_start();

if (!isset($_GET['id']) || !isset($_SESSION['products'][$_GET['id']])) {
    header('Location: index.php?error=No-ID-found');
    die();
}

$product = $_SESSION['products'][$_GET['id']];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $product["title"]; ?></title>
</head>

<body>
    <header>
        <a href="index.php"><img class="logo" src="./images/amazingLogo.png" alt="Logo"></a>
        <nav>
            <ul>
                <li><button><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a></button></li>
                <li><button><a href="backoffice.php">Back-Office</a></button></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><?= $product["title"]; ?></li>
            </ul>
        </div>
        <div class="productDetails">
            <div class="productCard">
                <img src=<?= $product["image"]; ?> alt=<?= $product["title"]; ?>>
                <div class="details">
                    <p><?= $product["title"]; ?></p>
                    <p><?= $product["description"]; ?></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>