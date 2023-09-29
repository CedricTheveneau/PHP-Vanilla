<?php

/*
Enoncé :
Vous avez un tableau indexé qui représente les scores de plusieurs joueurs dans un jeu. 
Chaque score est un tableau associatif contenant le nom du joueur et son score.

$scores = [
    ['nom' => 'Jean', 'score' => 250],
    ['nom' => 'Marie', 'score' => 300],
    ['nom' => 'Pierre', 'score' => 150],
    // ...
];

Tâche 1 : Écrire une fonction ajouterScore qui prend en paramètre le tableau $scores, un nom de joueur et un score, et qui ajoute un nouveau score au tableau.
DONE

Tâche 2 : Écrire une fonction trierScores qui prend en paramètre le tableau $scores et qui retourne un nouveau tableau avec les scores triés par ordre décroissant.
DONE

Tâche 3 : Écrire une fonction meilleursScores qui prend en paramètre le tableau $scores et un nombre n, et qui retourne un tableau contenant les n meilleurs scores.
DONE

Tâche 4 : Écrire une fonction scoreMoyen qui calcule et retourne le score moyen des joueurs.
DONE

Tâche 5 : Écrire une fonction filtrerScores qui prend en paramètre le tableau $scores et un score minimum, et qui retourne un nouveau tableau contenant seulement les scores supérieurs ou égaux au score minimum.
DONE

Tâche 6 : Écrire une fonction nomJoueurs qui prend en paramètre le tableau $scores et qui retourne un tableau indexé contenant uniquement les noms des joueurs.
DONE

Tâche 7 : Écrire une fonction scoreTotal qui calcule et retourne le score total (la somme des scores de tous les joueurs).
DONE

Tâche 8 : Écrire une fonction rechercherJoueur qui prend en paramètre le tableau $scores et un nom de joueur, et qui retourne le score de ce joueur s'il est dans le tableau, sinon null.

Contraintes :
Vous devez utiliser des boucles pour parcourir les tableaux.
Vous devez utiliser des fonctions pour réaliser chaque tâche.
Vous devez gérer les cas où le tableau est vide.
Vous devez tester chaque fonction avec différents cas de figure pour vous assurer qu'elle fonctionne correctement.


Correction :
*/

// Table of data
$scores = [
    ['name' => 'Jean', 'score' => 250],
    ['name' => 'Marie', 'score' => 300],
    ['name' => 'Pierre', 'score' => 150],
];

// First task - works
function addScore($scores, $playerName, $newScore)
{
    echo "<h2>First task</h2>";
    array_push($scores, ['name' => $playerName, 'score' => $newScore]);
    echo '<pre>';
    print_r($scores);
    echo '</pre>';
}
echo addScore($scores, 'Louis', 300);

// Second task - works
function sortScores($scores)
{
    echo "<h2>Second task</h2>";
    // First try, Doesn't work
    // sort($scores, 'score');
    // Second try, doesn't work
    // foreach ($scores as $score => $info) {
    //     arsort($scores, $info['score']);
    // }
    $score = array_column($scores, 'score');
    array_multisort($score, SORT_DESC, $scores);
    echo '<pre>';
    print_r($scores);
    echo '</pre>';
}
sortScores($scores);

// Third task - works but needs second task to work properly
function bestScores($scores, $n)
{
    echo "<h2>Third task</h2>";
    $score = array_column($scores, 'score');
    array_multisort($score, SORT_DESC, $scores);
    $bestScores = array_slice($scores, 0, $n);;
    echo '<pre>';
    print_r($bestScores);
    echo '</pre>';
}
bestScores($scores, 2);

// Forth task - works
function averageScore($scores)
{
    echo "<h2>Forth task</h2>";
    $totalScore = 0;
    foreach ($scores as $score => $info) {
        $totalScore = $totalScore + $info['score'];
    }
    if ($totalScore > 0) {
        $averageScore = $totalScore / count($scores);
        echo "<p>Average score : $averageScore</p>";
    }
}
averageScore($scores);

// Fifth task - works
function filterScore($scores, $minimumScore)
{
    echo "<h2>Fifth task</h2>";
    $filteredScore = [];
    foreach ($scores as $score => $info) {
        if ($info['score'] > $minimumScore) {
            array_push($filteredScore, $info['score']);
        }
    }
    echo '<pre>';
    print_r($filteredScore);
    echo '</pre>';
}
filterScore($scores, 200);

// Sixth task - works
function playerNames($scores)
{
    echo "<h2>Sixth task</h2>";
    $playerNames = [];
    foreach ($scores as $score => $info) {
        array_push($playerNames, $info['name']);
    }
    echo '<pre>';
    print_r($playerNames);
    echo '</pre>';
}
playerNames($scores);

// Seventh task - works
function totalScore($scores)
{
    echo "<h2>Seventh task</h2>";
    $totalScore = 0;
    foreach ($scores as $score => $info) {
        $totalScore = $totalScore + $info['score'];
    }
    echo "<p>Total score is $totalScore pts.</p>";
}
totalScore($scores);

// Eigth task - Doesn't work
function searchPlayer($scores, $name)
{
    $found = array_search($name, $scores);
    if ($found !== null) {
        echo $found;
    }
}
searchPlayer($scores, 'Jean');
