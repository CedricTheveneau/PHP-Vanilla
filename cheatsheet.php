<?php

// Tableaux indexés

$fruits = array("Pomme", "Banane", "Orange");

echo $fruits[2];

// Tableaux associatifs
$ages = [
    "Jean" => 25,
    "Marie" => 30,
    5 => 42,

];

echo $ages['Jean'];

// Tanleaux multidimentionnels

$matrix = [
    "Tableau1" => [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matrix[1][1];

// Afficher le contenu d'un tableau
echo '<pre>';
var_dump($matrix);
echo '</pre>';

echo '<pre>';
print_r($matrix);
echo '</pre>';

// Fonctions sur les tableaux

// Count retourne le nombre d'éléments d'un tableau
$tab1 = array(1, 2, 3);
echo '<pre>';
count($tab1);
echo '</pre>';

// sort() trie les entiers d'un tableau dans l'ordre croissant
$tab2 = array(2, 3, 1);
sort($tab2);

echo '<pre>';
print_r($tab2);
echo '</pre>';
// rsort() trie les entiers d'un tableau dans l'ordre décroissant
$tab3 = array(2, 3, 1);
rsort($tab3);
print_r($tab3);
echo '<pre>';
print_r($tab3);
echo '</pre>';
// array_reverse() Inverse l'ordre des éléments d'un tableau
$tab4 = array('un', 'deux', 'trois');
$tab4 = array_reverse($tab4);
print_r($tab4); 

// array_push() ajoute un élément au tableau
$tab5 = array(1, 2);
array_push($tab5, 3, 4, 5);
echo '<pre>' . print_r($tab5, true) . '</pre>';

// array_pop() supprime le dernier element d'un tableau
$tab6 = array(1, 2, 3);
$last = array_pop($tab6);
echo '<pre>' . $last . '</pre>';
echo '<pre>' . print_r($tab6, true) . '</pre>';

// array_shift() supprime le 1er élément d'un tableau
$tab7 = array(1, 2, 3);
$first = array_shift($tab7);
echo '<pre>' . $first . '</pre>';
echo '<pre>' . print_r($tab7, true) . '</pre>';

// array_unshift() Ajoute un ou plusieurs éléments au début d'un tableau
$tab8 = array(2, 3);
array_unshift($tab8, 1, 22);
echo '<pre>' . print_r($tab8, true) . '</pre>';

// array_merge() 
$tab1 = array(1, 2);
$tab2 = array(3, 4);
$result = array_merge($tab1, $tab2);
echo '<pre>' . print_r($result, true) . '</pre>';

// array_slice()
$arr = array(1, 2, 3, 4, 5);
$slice = array_slice($arr, 1, 3);
echo '<pre>' . print_r($slice) . '</pre>'; 