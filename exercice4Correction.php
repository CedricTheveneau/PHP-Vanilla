<?php

/*

Partie 1 :

Définissez une fonction nommée calculerMoyenne.
Cette fonction acceptera deux paramètres, représentant deux nombres 
pour lesquels la moyenne doit être calculée.
À l'intérieur de la fonction, déclarez une variable locale moyenne et utilisez-la 
pour stocker la moyenne des deux nombres passés en paramètres.
La fonction doit retourner la valeur de la variable moyenne.

En dehors de la fonction, appelez calculerMoyenne avec deux nombres de 
votre choix et affichez le résultat à l'écran à l'aide de echo ou print.

Après avoir appelé la fonction, essayez d'afficher la variable moyenne en 
dehors de la fonction.

Exemple de Code :
 */

/** Rédigez le code ici */
function calculerMoyenne($nombre1, $nombre2)
{
    $moyenne = ($nombre1 + $nombre2) / 2;
    return $moyenne;
}

// Appel de la fonction et affichage du résultat
echo "La moyenne de 5 et 10 est : " . calculerMoyenne(5, 10) . "<br>";

// Tentative d'accès à la variable locale en dehors de la fonction
echo $moyenne; // Cela devrait générer une erreur


/*

Que se passe-t-il lorsque vous tentez d'accéder à la variable moyenne en 
dehors de la fonction ?
...

Comment pouvez-vous résoudre ce problème si vous voulez accéder à la 
valeur de la moyenne en dehors de la fonction ( Corrigez le code ) ?
...

 */

/*
-----------------------------------------------------------------------------

Partie 2 :

Créez deux variables globales

$var1 = "Bonjour";
$var2 = "le monde!";

1 - Créez une fonction concatener
Dans cette fonction, essayez de concaténer $var1 et $var2 sans utiliser 
le mot-clé global, et affichez le résultat.

2 - Créez une autre fonction concatenerAvecGlobal
Dans cette fonction, utilisez le mot-clé global pour concaténer $var1 et $var2, 
et affichez le résultat.

3 -  Créez une troisième fonction concatenerAvecSuperglobal
Dans cette fonction, utilisez la variable superglobale $_GLOBALS pour concaténer 
$var1 et $var2, et affichez le résultat.

4- Appelez les trois fonctions
Après avoir défini vos fonctions, appelez-les dans l'ordre dans lequel elles ont 
été définies.

Correction :
  */

$var1 = "Bonjour";
$var2 = "le monde!";

// function concatener() {
//     // Ceci générera une erreur car $var1 et $var2 ne sont pas accessibles dans cette portée.
//     echo $var1 . ' ' . $var2;
// }

function concatenerAvecGlobal()
{
    global $var1, $var2;
    echo $var1 . ' ' . $var2; // Ceci fonctionnera car nous avons utilisé le mot-clé global.
}

function concatenerAvecSuperglobal()
{
    echo $GLOBALS['var1'] . ' ' . $GLOBALS['var2']; // Ceci fonctionnera car nous avons utilisé la variable superglobale $_GLOBALS.
}

// concatener();
echo '<br>';
concatenerAvecGlobal();
echo '<br>';
concatenerAvecSuperglobal();
