<?php
/*
Enoncé:

Vidéo d'explication de l'énoncé : https://discord.com/channels/816298772450770974/999582942336655410/1156235366605525012

Développez un quiz en PHP qui utilise la méthode $_POST pour recueillir et 
traiter les réponses de l'utilisateur. L'utilisateur doit répondre à un ensemble 
de questions et, à la fin, recevoir un score basé sur ses réponses correctes.

Créez un fichier, par exemple quiz.php.
b. Développez un ensemble de questions à choix multiples avec différentes réponses possibles.

Utilisez des formulaires HTML pour recueillir les réponses de l'utilisateur.

Utilisez la méthode $_POST pour recueillir les réponses du formulaire.
Comparez les réponses de l'utilisateur avec les réponses correctes.
Calculez le score total basé sur le nombre de réponses correctes.

Affichez le score total de l'utilisateur à la fin du quiz.
Offrez à l'utilisateur la possibilité de reprendre le quiz.

Correction :
*/
// Tableau des questions, choix et réponses correctes
$questions = [
    [
        'question' => 'Quelle est la capitale de la France ?',
        'choices' => ['Berlin', 'Madrid', 'Paris', 'Lisbonne'],
        'correct' => 'Paris'
    ],
    [
        'question' => 'Quel est le plus grand océan du monde ?',
        'choices' => ['Atlantique', 'Indien', 'Pacifique', 'Arctique'],
        'correct' => 'Pacifique'
    ],
];

echo "<form method='post'>";

foreach ($questions as $question => $info) {
    echo "<div><label for='$question'>" . $info['question'] . "</label>";
    foreach ($info['choices'] as $choice => $value) {
        echo "<input type='radio' id=$question name=$question value=$value /><label for=$question>$value</label>";
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $answer1 = htmlspecialchars($_POST['0']);
        $answer2 = htmlspecialchars($_POST['1']);

        if ($answer1 == $info['correct']) {
            # code...
        }
    }
    echo "</div>";
}
echo "<button type='submit'>Submit</button></form>";
// Complétez le code
