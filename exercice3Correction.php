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

Tâche 2 : Écrire une fonction trierScores qui prend en paramètre le tableau $scores et qui retourne un nouveau tableau avec les scores triés par ordre décroissant.

Tâche 3 : Écrire une fonction meilleursScores qui prend en paramètre le tableau $scores et un nombre n, et qui retourne un tableau contenant les n meilleurs scores.

Tâche 4 : Écrire une fonction scoreMoyen qui calcule et retourne le score moyen des joueurs.

Tâche 5 : Écrire une fonction filtrerScores qui prend en paramètre le tableau $scores et un score minimum, et qui retourne un nouveau tableau contenant seulement les scores supérieurs ou égaux au score minimum.

Tâche 6 : Écrire une fonction nomJoueurs qui prend en paramètre le tableau $scores et qui retourne un tableau indexé contenant uniquement les noms des joueurs.

Tâche 7 : Écrire une fonction scoreTotal qui calcule et retourne le score total (la somme des scores de tous les joueurs).

Tâche 8 : Écrire une fonction rechercherJoueur qui prend en paramètre le tableau $scores et un nom de joueur, et qui retourne le score de ce joueur s'il est dans le tableau, sinon null.

Contraintes :
Vous devez utiliser des boucles pour parcourir les tableaux.
Vous devez utiliser des fonctions pour réaliser chaque tâche.
Vous devez gérer les cas où le tableau est vide.
Vous devez tester chaque fonction avec différents cas de figure pour vous assurer qu'elle fonctionne correctement.


Correction :
*/

$scores = [
    ['nom' => 'Jean', 'score' => 250],
    ['nom' => 'Marie', 'score' => 300],
    ['nom' => 'Pierre', 'score' => 150],
    ['nom' => 'Benoit', 'score' => 400],
    ['nom' => 'Max', 'score' => 500],
    ['nom' => 'Claude', 'score' => 100],
    ['nom' => 'Cédric', 'score' => 350]
];

// Tâche 1 : Ajouter un Score

function ajouterScore($scores, $nom, $score)
{
    $scores[] = ['nom' => $nom, 'score' => $score];
    return $scores;
}

$scores = ajouterScore($scores, 'Paul', 200);

// Tâche 2 : Trier les Scores
// usort permet de trier les valeurs d'un tableau par rapport à une clé précise
function trierScores($scores)
{
    usort($scores, function ($a, $b) {
        return $b['score'] - $a['score'];
    });
    return $scores;
}

$scores = trierScores($scores);

// 3. Tâche 3 : Meilleurs Scores
// array_slice Extrait une portion de tableau
function meilleursScores($scores, $n)
{
    return array_slice($scores, 0, $n);
}

$topScores = meilleursScores($scores, 3);

// 4. Tâche 4 : Score Moyen
// array_sum Calcule la somme des valeurs du tableau
function scoreMoyen($scores)
{
    $totalScore = array_sum(array_column($scores, 'score'));
    return $totalScore / count($scores);
}

$moyenne = scoreMoyen($scores);

// 5. Tâche 5 : Filtrer les Scores
// array_filter  Filtre les éléments d'un tableau grâce à une fonction de rappel
function filtrerScores($scores, $min)
{
    return array_filter($scores, function ($score) use ($min) {
        return $score['score'] >= $min;
    });
}

$scoresFiltres = filtrerScores($scores, 200);

// 6. Tâche 6 : Noms des Joueurs
// array_column  Retourne les valeurs d'une colonne d'un tableau d'entrée
function nomJoueurs($scores)
{
    return array_column($scores, 'nom');
}

$noms = nomJoueurs($scores);

// 7. Tâche 7 : Score Total

function scoreTotal($scores)
{
    return array_sum(array_column($scores, 'score'));
}

$total = scoreTotal($scores);

// 8. Tâche 8 : Rechercher un Joueur

function rechercherJoueur($scores, $nom)
{
    // Autre solution
    // return array_filter($scores, function($score) use ($nom) {
    //     return $score['nom'] == $nom;
    // });
    foreach ($scores as $score) {
        if ($score['nom'] === $nom) {
            return $score['score'];
        }
    }
    return null;
}

$scoreJean = rechercherJoueur($scores, 'Jean');

echo "<pre>" . print_r($scoreJean, true) . "</pre>";
