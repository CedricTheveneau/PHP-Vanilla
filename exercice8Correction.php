<?php
/*
Enoncé:

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
    // Ajoutez plus de questions selon vos préférences
];

$score = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($questions as $index => $question) {
        if (isset($_POST["q$index"]) && $_POST["q$index"] === $question['correct']) {
            $score++;
        }
    }
}

// Complétez le code
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Quiz en PHP</title>
</head>

<body>
    <form method="POST" action="">
        <?php foreach ($questions as $index => $question) : ?>
            <p><?php echo $question['question']; ?></p>
            <?php foreach ($question['choices'] as $choice) : ?>
                <label>
                    <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $choice; ?>" required> <?php echo $choice; ?>
                </label><br>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <input type="submit" value="Soumettre">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <p>Votre score est de : <?php echo $score; ?> / <?php echo count($questions); ?></p>
    <?php endif; ?>
</body>

</html>