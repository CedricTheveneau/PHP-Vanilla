<?php
/*

Créez un code qui affiche le nombre de fois ou la page a été actualisée.
Vous devrez afficher le texte : "Cette page a été actualisée x fois"
A chaque fois qu'on actualise la page, le nombre x s'incrémente de 1.
Utilisez pour cela un cookie.

 */
if (!isset($_COOKIE['loads'])) {
    global $loads;
    $loads = 1;
    setcookie("loads", $loads, time() + 3600 * 24, "/");
    echo "<p>Cette page a été actualisée " . $loads . " fois.</p>";
} else {
    $loads = ++$_COOKIE['loads'];
    setcookie("loads", $loads, time() + 3600 * 24, "/");
    echo "<p>Cette page a été actualisée " . $_COOKIE['loads'] . " fois.</p>";
}
