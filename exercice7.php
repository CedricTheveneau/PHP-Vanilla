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
DONE

Correction :
*/

// Not working url : http://localhost/CloudCampus/exercice7.php?note1=15&note2=18&note3=12&note4=14&note5=16&note6=11
// Working url : http://localhost/CloudCampus/exercice7.php?note1=15&note2=18&note3=12&note4=14

print_r($_GET); // Shows the url parameters
$infoLength = count($_GET); // Finds the total of url parameters
echo "<p>$infoLength</p>";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // $nomFichier = $_FILES['monfichier']['name'];
    $nomFicher = "notes.php";
    $file = $_GET;
    echo "<pre>" . print_r($_FILES) . "</pre>";
    move_uploaded_file($_FILES['monfichier']['tmp_name'], "uploads/$nomFichier");
}

function calcTotal($note)
{
    global $totalNote;
    $totalNote = $totalNote + $note;
}

if ($infoLength > 5 || $infoLength < 3) {
    echo "<p>La limite de notes est de 5 par requête. Vous avez ajouté " . ($infoLength - 5) . " note(s) de trop.</p>";
} else {
    foreach ($_GET as $note => $value) {
        echo "<p>$note : $value</p>";
        calcTotal($value);
        echo $totalNote;
    }
    $avgNote = $totalNote / $infoLength;
    echo "<p>$avgNote</p>";
}

// file_put_contents("./uploads", print_r($_GET, true), FILE_APPEND); // Doesn't work
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $nomFichier = $_FILES['monfichier']['name'];
//     move_uploaded_file($_FILES['monfichier']['tmp_name'], "uploads/$nomFichier");
// }
