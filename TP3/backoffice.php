<?php

// 7 - Back-Office :
// -Accès à une page listant les produits avec possibilité d’ajouter et d’éditer les produits existants.

session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        [
            'title' => 'Produit 1',
            'description' => 'Ceci est la description du produit 1.',
            'image' => './images/image1.png'
        ],
        [
            'title' => 'Produit 2',
            'description' => 'Ceci est la description du produit 2.',
            'image' => './images/image2.png'
        ],
        [
            'title' => 'Produit 3',
            'description' => 'Ceci est la description du produit 3.',
            'image' => './images/image3.png'
        ],
        [
            'title' => 'Produit 4',
            'description' => 'Ceci est la description du produit 4.',
            'image' => './images/image4.png'
        ],
        [
            'title' => 'Produit 5',
            'description' => 'Ceci est la description du produit 5.',
            'image' => './images/image1.png'
        ],
        [
            'title' => 'Produit 6',
            'description' => 'Ceci est la description du produit 6.',
            'image' => './images/image2.png'
        ],
        [
            'title' => 'Produit 7',
            'description' => 'Ceci est la description du produit 7.',
            'image' => './images/image3.png'
        ],
        [
            'title' => 'Produit 8',
            'description' => 'Ceci est la description du produit 8.',
            'image' => './images/image4.png'
        ],
        [
            'title' => 'Produit 9',
            'description' => 'Ceci est la description du produit 9.',
            'image' => './images/image1.png'
        ],
        [
            'title' => 'Produit 10',
            'description' => 'Ceci est la description du produit 10.',
            'image' => './images/image2.png'
        ]
    ];
}

if (!isset($_SESSION["user"]['account'])) {
    header('Location: signIn.php?error=not_logged_in');
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        unset($_SESSION['products'][$_POST["delete"]]);
    }
    if (isset($_POST['add'])) {
        header('Location: add.php');
        die();
    }
    if (isset($_POST['edit'])) {
        $urlParameter = "?id=" . $_POST['edit'];
        header('Location: edit.php' . $urlParameter);
        die();
    }
    if (isset($_POST['disconnect'])) {
        unset($_SESSION['user']['account']);
        header('Location: logIn.php');
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back-Office</title>
</head>

<body>
    <header>
        <a href="index.php"><img class="logo" src="./images/amazingLogo.png" alt="Logo"></a>
        <nav>
            <ul>
                <li>
                    <div class="crudRow_BO crudRow_Nav">
                        <form action="" method="POST"><button name="add">Add</button></form>
                    </div>
                </li>
                <li><button><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a></button></li>
                <li><button><a href="backoffice.php">Back-Office</a></button></li>
                <li>
                    <div class="crudRow_BO crudRow_Nav">
                        <form action="" method="POST"><button class="deconexion" type="submit" name="disconnect">Déconnexion</button></form>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><a href="backoffice.php">Back-office</a></li>
            </ul>
        </div>
        <div class="products">
            <?php foreach ($_SESSION['products'] as $product => $data) : ?>
                <a href=<?= "productDetails.php?id=" . $product; ?>>
                    <div class="productCard">
                        <img src=<?= $data["image"]; ?> alt=<?= $data["title"]; ?>>
                        <p><?= $data["title"]; ?></p>
                        <p><?= $data["description"]; ?></p>
                        <div class="crudRow_BO">
                            <form action="" method="POST"><button name="delete" value=<?= $product; ?>>Delete</button></form>
                            <form action="" method="POST"><button name="edit" value=<?= $product; ?>>Edit</button></form>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>