<?php

/*

Partie 1 :

Définissez une fonction nommée calculerMoyenne.
Cette fonction acceptera deux paramètres, représentant deux nombres pour lesquels la moyenne doit être calculée.
À l'intérieur de la fonction, déclarez une variable locale moyenne et utilisez-la pour stocker la moyenne des deux nombres passés en paramètres.
La fonction doit retourner la valeur de la variable moyenne.

En dehors de la fonction, appelez calculerMoyenne avec deux nombres de votre choix et affichez le résultat à l'écran à l'aide de echo ou print.

Après avoir appelé la fonction, essayez d'afficher la variable moyenne en dehors de la fonction.

Exemple de Code :
 */

/** Rédigez le code ici */

/*

Que se passe-t-il lorsque vous tentez d'accéder à la variable moyenne en dehors de la fonction ?
...

Comment pouvez-vous résoudre ce problème si vous voulez accéder à la valeur de la moyenne en dehors de la fonction ( Corrigez le code ) ?
...

 */
echo "<h2>Part. 1 :</h2>";

function calcAvg($firstNum, $secondNum)
{
    $avg = ($firstNum + $secondNum) / 2;
    return $avg;
}

echo "La moyenne des deux nombres est de : " . calcAvg(10, 5);

calcAvg(25, 25);
echo $avg;

echo "<p style='font-weight:bold;'>Que se passe-t-il lorsque vous tentez d'accéder à la variable moyenne en dehors de la fonction ?</p>";
echo "<p>La page nous renvoie une erreur : 'Warning: Undefined variable $ avg'.</p>";

echo "<p style='font-weight:bold;'>Comment pouvez-vous résoudre ce problème si vous voulez accéder à la valeur de la moyenne en dehors de la fonction ( Corrigez le code ) ?</p>";
echo "<p>Il suffit de définir la variable $ avg comme global dans la fonction calcAvg.</p>";

function calcAvgFixed($firstNum, $secondNum)
{
    global $avgFixed;
    $avgFixed = ($firstNum + $secondNum) / 2;
    return $avgFixed;
}

echo "La moyenne des deux nombres est de : " . calcAvgFixed(50, 25);
echo "<p>Je peux appeler la variable déclarée dans ma fonction, sa valeur est : $avgFixed</p>";

/*
-----------------------------------------------------------------------------

Partie 2 :

Créez deux variables globales

$var1 = "Bonjour";
$var2 = "le monde!";

1 - Créez une fonction concatener
Dans cette fonction, essayez de concaténer $var1 et $var2 sans utiliser le mot-clé global, et affichez le résultat.

2 - Créez une autre fonction concatenerAvecGlobal
Dans cette fonction, utilisez le mot-clé global pour concaténer $var1 et $var2, et affichez le résultat.

3 -  Créez une troisième fonction concatenerAvecSuperglobal
Dans cette fonction, utilisez la variable superglobale $_GLOBALS pour concaténer $var1 et $var2, et affichez le résultat.

4- Appelez les trois fonctions
Après avoir défini vos fonctions, appelez-les dans l'ordre dans lequel elles ont été définies.

Correction :
  */

/** Rédigez le code ici */

echo "<h2>Part. 2 :</h2>";

$var1 = "Hello,";
$var2 = "world !";

echo "<p style='font-weight:bold;'>Créez une fonction concatener</p>";

function concatenate($firstWord, $secondWord)
{
    $sentence = "<p>$firstWord $secondWord</p>";
    return $sentence;
}
echo concatenate($var1, $var2);

echo "<p style='font-weight:bold;'>Créez une autre fonction concatenerAvecGlobal</p>";

function concatenateUsingGlobals($firstWord, $secondWord)
{
    global $sentenceGlobal;
    $sentenceGlobal = "<p>$firstWord $secondWord</p>";
    return $sentenceGlobal;
}
concatenateUsingGlobals($var1, $var2);
echo $sentenceGlobal;

echo "<p style='font-weight:bold;'>Créez une troisième fonction concatenerAvecSuperglobal</p>";

function concatenateUsingSuperGlobals()
{
    $sentenceGlobal = $GLOBALS["var1"] . " " . $GLOBALS["var2"];
    return $sentenceGlobal;
}
echo concatenateUsingSuperGlobals();

echo "<p style='font-weight:bold;'>Appelez les trois fonctions</p>";
echo concatenate($var1, $var2);
echo concatenateUsingGlobals($var1, $var2);
echo concatenateUsingSuperGlobals();
