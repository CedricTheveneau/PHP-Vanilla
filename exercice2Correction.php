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

// 1. Déclaration d'une variable $produits qui est un tableau associatif.
$produits = [
    "Ordinateur" => ["prix" => 500, "quantite" => 3],
    "Téléphone" => ["prix" => 300, "quantite" => 4],
    "Tablette" => ["prix" => 200, "quantite" => 10],
    "Imprimante" => ["prix" => 150, "quantite" => 7],
];

// 2. Déclaration d'une fonction calculerPrixTotal qui prend en paramètre le prix et la quantité d'un produit.
function calculerPrixTotal($prix, $quantite) {
    // Calcul et retour du prix total du stock pour ce produit.
    return $prix * $quantite;
}

// 3. Déclaration d'une fonction afficherProduit qui prend en paramètre un nom de produit, un prix, une quantité et un prix total du stock.
function afficherProduit($nom, $prix, $quantite, $prixTotal) {
    // Condition if pour vérifier si le prix total du stock est supérieur à 1000€
    if ($prixTotal > 1000) {
        // Utilisation de echo pour afficher le nom du produit et le prix total du stock
        echo $nom . " a un prix total de stock de " . $prixTotal . "€.";
        
        // Bonus: Condition if pour vérifier si la quantité du produit est inférieure à 5
        if ($quantite < 5) {
            echo " Attention : stock faible !";
        }
        
        // Saut de ligne après chaque produit affiché
        echo "<br>";
    }
}

// 4. Boucle foreach pour parcourir le tableau de produits
foreach ($produits as $nom => $details) {
    // Calcul du prix total du stock pour ce produit en appelant la fonction calculerPrixTotal
    $prixTotal = calculerPrixTotal($details["prix"], $details["quantite"]);
    
    // Appel de la fonction afficherProduit avec le nom, le prix, la quantité et le prix total du stock en paramètres
    afficherProduit($nom, $details["prix"], $details["quantite"], $prixTotal);
}

?>