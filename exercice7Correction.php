<?php
/*

Créer une application simple en PHP qui utilise la méthode $_GET pour récupérer des données du navigateur web vers le serveur web.

L'application est un simple calculateur de moyenne pour les étudiants.
Les utilisateurs devraient être capables d'entrer plusieurs notes (au moins trois) via l'URL.
L'application doit calculer la moyenne des notes et afficher une réponse appropriée à l'utilisateur.
Si une ou plusieurs des notes ne sont pas valides (pas numériques ou en dehors de l'intervalle 0-20), l'application doit afficher un message d'erreur approprié.

Créez un nouveau fichier PHP, par exemple moyenne.php.
Dans moyenne.php, récupérez au moins trois notes via la méthode $_GET.
Vérifiez si toutes les notes sont valides. (Si elles existent dans l'url, si elles ne sont pas vides et si c'est bien des entiers positif)
Si les notes sont valides, calculez la moyenne et affichez-la à l'utilisateur avec un message approprié.
Si une ou plusieurs notes ne sont pas valides, affichez un message d'erreur à l'utilisateur.

Exemple d'URL
http://votre_domaine/moyenne.php?note1=15&note2=18&note3=12

Ajoutez une validation supplémentaire pour s'assurer que les utilisateurs ne peuvent pas entrer plus de cinq notes.

*/

if (
    isset($_GET['note1']) && is_numeric($_GET['note1']) && $_GET['note1'] >= 0 && $_GET['note1'] <= 20 &&
    isset($_GET['note2']) && is_numeric($_GET['note2']) && $_GET['note2'] >= 0 && $_GET['note2'] <= 20 &&
    isset($_GET['note3']) && is_numeric($_GET['note3']) && $_GET['note3'] >= 0 && $_GET['note3'] <= 20
) {

    // Calcul de la moyenne
    $moyenne = ($_GET['note1'] + $_GET['note2'] + $_GET['note3']) / 3;

    // Affichage de la moyenne
    echo "La moyenne des trois notes est: " . $moyenne;
} else {
    // Message d'erreur si une ou plusieurs notes sont invalides
    echo "Veuillez entrer des notes valides (numériques et entre 0 et 20).";
}
