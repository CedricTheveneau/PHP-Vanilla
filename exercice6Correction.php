<?php
/*

Créez un code qui affiche le nombre de fois ou la page a été actualisée.
Vous devrez afficher le texte : "Cette page a été actualisée x fois"
A chaque fois qu'on actualise la page, le nombre x s'incrémente de 1.
Utilisez pour cela un cookie.

 */

if (!isset($_COOKIE['nb'])) {
    setcookie('nb', 0, time() + 3600 * 24);
    echo 'ici';
} else {
    $newVal = intval($_COOKIE['nb']) + 1;
    echo "Cette page a été actualisée " . $newVal . " fois";
    setcookie('nb', $_COOKIE['nb'] + 1, time() + 3600 * 24);
}
