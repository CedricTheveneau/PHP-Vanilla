<?php

/*

Objectif:
Créer un système de panier d'achat simple en utilisant les sessions PHP, où les utilisateurs peuvent ajouter des produits à leur panier et voir le total de leurs achats.

Instructions:
Création des Pages:

Créez une page index.php qui affichera la liste des produits disponibles.
Créez une page panier.php qui affichera les produits ajoutés au panier et le total des achats.
Liste des Produits:

Sur la page index.php, créez une liste de produits. Chaque produit doit avoir un nom et un prix.
À côté de chaque produit, ajoutez un bouton ou un lien pour ajouter le produit au panier.
Ajout au Panier:

Lorsqu'un utilisateur ajoute un produit au panier, stockez ce produit dans une session.
Assurez-vous que les utilisateurs peuvent ajouter plusieurs quantités du même produit.
Si un produit est déjà dans le panier, augmentez simplement sa quantité.
Affichage du Panier:

Sur la page panier.php, affichez tous les produits ajoutés au panier.
Calculez et affichez le total des achats.
Ajoutez un bouton ou un lien pour vider le panier.
Vider le Panier:

Lorsqu'un utilisateur clique sur le bouton pour vider le panier, supprimez tous les produits de la session du panier.

*/

session_start();
$produits = [
    ["nom" => "Produit A", "prix" => 10],
    ["nom" => "Produit B", "prix" => 20],
    // Ajoutez plus de produits si vous le souhaitez
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomProduit = $_POST["nomProduit"];
    $quantite = $_POST["quantite"];
    $price = $_POST["price"];
    if (!isset($_SESSION["panier"][$nomProduit])) {
        $_SESSION["panier"][$nomProduit] = [$quantite, $price];
    } else {
        $_SESSION["panier"][$nomProduit][0] += $quantite;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Produits</title>
</head>

<body>
    <ul>
        <?php foreach ($produits as $produit) : ?>
            <li>
                <?php echo $produit["nom"]; ?> - <?php echo $produit["prix"]; ?>€
                <form method="post" action="index.php">
                    <input type="hidden" name="nomProduit" value="<?php echo $produit["nom"]; ?>">
                    <input type="number" name="quantite" value="1" min="1">
                    <input type="hidden" name="price" value="<?php echo $produit["prix"]; ?>">
                    <button type="submit">Ajouter au panier</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="basket.php">Voir le panier</a>
</body>

</html>