<?php
/*
Objectif :
Créer un script PHP qui gère une liste de livres. 
Pour chaque livre, vous aurez le titre et le nombre de pages. 
Vous devrez créer une fonction pour afficher uniquement les livres qui ont plus de 100 pages.

Instructions :
Créez une variable $livres qui sera un tableau associatif. Les clés seront les titres des livres et les valeurs seront le nombre de pages de chaque livre.
Exemple :

$livres = [
    "Harry Potter" => 350,
    "Le Petit Prince" => 96,
    // Ajoutez d'autres livres ici
];

Créez une fonction afficherLivre qui prendra en paramètre un titre de livre et son nombre de pages. Cette fonction devra afficher le titre du livre seulement si le nombre de pages est supérieur à 100.
Exemple de sortie :

"Harry Potter" a 350 pages.

Utilisez une boucle foreach pour parcourir le tableau $livres et appelez la fonction afficherLivre pour chaque livre dans le tableau.

Assurez-vous d'utiliser des echo pour afficher les résultats à l'écran.

Le script doit afficher correctement les titres des livres qui ont plus de 100 pages.
Le script doit utiliser une variable pour le tableau $livres, une fonction afficherLivre, une boucle foreach, et des echo pour l'affichage.

Ajoutez une condition if dans la fonction afficherLivre pour afficher un message spécial si le livre a plus de 500 pages, par exemple :

"Harry Potter" a 350 pages. C'est un très long livre !

Correction :
*/

$books = [
  'book1' => 98,
  'book2' => 125,
  'book3' => 147,
  'book4' => 54,
  'book5' => 263,
  'book6' => 76,
];

function showBookInfo($bookTitle, $bookPages) {
  if ($bookPages > 250) {
    echo "<p>$bookTitle est un très long livre. Il a $bookPages pages.</p>";

  }
  else if ($bookPages > 100) {
    echo "<p>$bookTitle a plus de 100 pages. Il en a $bookPages.</p>";
  }  
}

foreach($books as $bookTitle => $bookPages) {
  showBookInfo($bookTitle, $bookPages);
}

?>