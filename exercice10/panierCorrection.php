<?php

session_start();

// echo '<pre>' . print_r($_SESSION, true) . '</pre>';


$total = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Panier</title>
</head>

<body>
    <ul>
        <?php if (isset($_SESSION['panier'])) : ?>
            <?php foreach ($_SESSION['panier'] as $nomProduit => $data) : ?>
                <li>
                    <?php
                    echo $nomProduit . "Quantité : " . $data['quantite'];
                    $total += ($data['quantite'] * $data['prix'])
                    ?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <p>Total: <?php echo $total; ?>€</p>
    <a href="indexCorrection.php">Retour aux produits</a>
</body>

</html>