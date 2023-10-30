<?php
session_start();

$produits = [
    ["nom" => "Produit A", "prix" => 10],
    ["nom" => "Produit B", "prix" => 20],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomProduit = $_POST['nomProduit'];
    $quantite = $_POST['quantite'];
    $prixProduit = $_POST['prixProduit'];

    if (isset($_SESSION['panier'][$nomProduit])) {
        // var_dump($_SESSION['panier'][$nomProduit]);
        $_SESSION['panier'][$nomProduit]['quantite'] += $quantite;
    } else {
        $_SESSION['panier'][$nomProduit] = [
            'quantite' => $quantite,
            'prix' => $prixProduit
        ];
    }
}

// echo '<pre>' . print_r($_SESSION, true) . '</pre>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($produits as $produit) : ?>
            <li>
                <?= $produit["nom"] ?> - <?= $produit["prix"] ?>
                <form method="post" action="">
                    <input type="hidden" name="nomProduit" value="<?php echo $produit["nom"]; ?>">
                    <input type="hidden" name="prixProduit" value="<?php echo $produit["prix"]; ?>">
                    <input type="number" name="quantite" value="1" min="1">
                    <button type="submit">Ajouter au panier</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="panierCorrection.php">Voir le panier</a>
</body>

</html>