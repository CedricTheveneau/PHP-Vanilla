<?php

/*

Créer un script PHP qui gère une liste de produits. 
Pour chaque produit, vous aurez le nom, le prix et la quantité en stock. 
Vous devrez créer des fonctions pour calculer le prix total du stock pour chaque 
produit et pour afficher uniquement les produits dont le prix total du stock est 
supérieur à 1000€.

1 - Créez une variable $produits qui sera un tableau associatif. Les clés seront les noms des produits et les valeurs seront un autre tableau associatif avec le prix et la quantité en stock de chaque produit.

$produits = [
    "Ordinateur" => ["prix" => 500, "quantite" => 3],
    // Ajoutez d'autres produits ici
];

2 - Créez une fonction calculerPrixTotal qui prendra en paramètre le prix et la quantité d'un produit et retournera le prix total du stock pour ce produit.

3 - Créez une fonction afficherProduit qui prendra en paramètre un nom de produit, un prix, une quantité et un prix total du stock. Cette fonction devra afficher le nom du produit et le prix total du stock seulement si le prix total du stock est supérieur à 1000€.

4 - Utilisez une boucle foreach pour parcourir le tableau $produits et appelez les fonctions calculerPrixTotal et afficherProduit pour chaque produit dans le tableau.

5 - Assurez-vous d'utiliser des echo pour afficher les résultats à l'écran.

Le script doit afficher correctement les noms des produits dont le prix total du stock est supérieur à 1000€.

Le script doit utiliser une variable pour le tableau $produits, des fonctions calculerPrixTotal et afficherProduit, une boucle foreach, et des echo pour l'affichage.

Ajoutez une condition if dans la fonction afficherProduit pour afficher un message spécial si le produit a moins de 5 articles en stock, par exemple :

"Ordinateur" a un prix total de stock de 1500€. Attention : stock faible !

Exemple de produits :
Ordinateur : 500€, 3 en stock
Téléphone : 300€, 4 en stock
Tablette : 200€, 10 en stock
Imprimante : 150€, 7 en stock

Correction :
*/

$products = [
    "Milk" => ["price" => 1.99, "quantity" => 6],
    "Egg" => ["price" => 2.99, "quantity" => 12],
    "Flour" => ["price" => 3.99, "quantity" => 1],
    "Oil" => ["price" => 2.99, "quantity" => 1],
    "Computer" => ["price" => 1199.99, "quantity" => 1],
    "TV" => ["price" => 2499.99, "quantity" => 1],
    "Xbox" => ["price" => 499.99, "quantity" => 7],
];

function displayProduct($productName, $totalPrice, $productQuantity) {
    if ($productQuantity < 5) {
        echo "<p>$productName's price is over 1000, it's $totalPrice. BEWARE : Low Stock !</p>";
    }
    else {
        echo "<p>$productName's price is over 1000, it's $totalPrice.</p>";
    }
}

function totalPrice($productName, $productPrice, $productQuantity) {
    $totalPrice = $productPrice * $productQuantity;
    if ($totalPrice > 1000) {
        displayProduct($productName, $totalPrice, $productQuantity);
    }
}

// First try, doesn't work, probably because PHP is NOT Object Oriented
// foreach($products as $product => [$price, $quantity]) {
//     totalPrice($product, $price, $quantity);
// }

// Second tried, got helped by Lukas, based on data storage in the loop and reuse directly in the function
foreach ($products as $product => $productInfo) {
    totalPrice($product, $productInfo["price"], $productInfo["quantity"]);
}
?>