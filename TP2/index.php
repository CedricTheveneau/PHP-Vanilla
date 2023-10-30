<?php
session_start();
if (!isset($_SESSION['films'])) {
    $_SESSION['films'] = [
        ['titre' => "Avengers", 'description' => "Lorsque la sécurité et l’équilibre de la planète sont menacés par un ennemi d’un genre nouveau, Nick Fury, le directeur du SHIELD, l’agence internationale du maintien de la paix, réunit une équipe pour empêcher le monde de basculer dans le chaos. Partout sur Terre, le recrutement des nouveaux héros dont le monde a besoin commence…", 'image' => "./images/avengers.jpg"],
        ['titre' => "Captain America : First Avenger", 'description' => "1941, la Seconde Guerre Mondiale fait rage. Après avoir tenté vainement de s'engager dans l'armée pour se battre aux côtés des Alliés, Steve Rogers, frêle et timide, se porte volontaire pour participer à un programme expérimental qui va le transformer en un Super Soldat connu sous le nom de Captain America. Sous le commandement du colonel Chester Phillips, il s'apprête à affronter HYDRA, l'organisation scientifique secrète des nazis dirigée par le redoutable Crâne Rouge, aux côtés de Bucky Barnes et Peggy Carter...", 'image' => './images/captain-america-first-avenger.jpg'],
        ['titre' => "Equalizer", 'description' => "McCall, un homme qui pense avoir rangé son passé mystérieux derrière lui, se consacre à sa nouvelle vie tranquille. Au moment où il rencontre Teri, une jeune fille sous le contrôle de gangsters russes violents, il décide d'agir. McCall sort ainsi de sa retraite et voit son désir de justice réveillé.", 'image' => "./images/Equalizer.jpg"],
        ['titre' => "Equalizer 2", 'description' => "Robert McCall sert inlassablement la justice au nom des exploités et des opprimés. Mais jusqu’où est-il prêt à aller lorsque cela touche quelqu’un qu’il aime ?", 'image' => "./images/Equalizer-2.jpg"],
        ['titre' => "Fast & Furious : Hobbs & Shaw", 'description' => "Depuis que Hobbs, fidèle agent de sécurité au service diplomatique des États-Unis, combatif mais droit, et Shaw, un homme sans foi ni loi, ancien membre de l’élite militaire britannique, se sont affrontés en 2015 dans Fast & furious 7, les deux hommes font tout ce qu’ils peuvent pour se nuire l’un à l’autre. Mais lorsque Brixton, un anarchiste génétiquement modifié, met la main sur une arme de destruction massive après avoir battu le meilleur agent du MI6 qui se trouve être la sœur de Shaw, les deux ennemis de longue date vont devoir alors faire équipe pour faire tomber le seul adversaire capable de les anéantir.", 'image' => "./images/fast-furious-hobbs-shaw.jpg"],
        ['titre' => "Logan", 'description' => "Dans un futur proche, un certain Logan, épuisé de fatigue, s’occupe d’un Professeur X souffrant, dans un lieu gardé secret à la frontière Mexicaine. Mais les tentatives de Logan pour se retrancher du monde et rompre avec son passé vont s’épuiser lorsqu’une jeune mutante traquée par de sombres individus va se retrouver soudainement face à lui.", 'image' => "./images/logan.jpg"],
        ['titre' => "Split", 'description' => "Les fractures mentales des personnes présentant un trouble dissociatif de la personnalité ont longtemps fasciné et échappé à la science, il se dit que certains peuvent également manifester des attributs physiques uniques pour chaque personnalité ; un prisme cognitif et physiologique dans un seul être. Kevin a manifesté 23 personnalités devant son psychiatre de longue date, le Dr Fletcher mais il en reste une, immergée, qui commence à se matérialiser et à dominer toutes les autres. Contraint d'enlever trois adolescentes, dont la volontaire Casey, Kevin se bat pour survivre parmi tous ceux qui évoluent en lui-même – et autour de lui- tandis que les murs entre ses personnalités volent en éclats.", 'image' => "./images/split.jpg"],
        ['titre' => "Glass", 'description' => "Peu de temps après les événements relatés dans Split, David Dunn - l’homme incassable - poursuit sa traque de La Bête, surnom donné à Kevin Crumb depuis qu’on le sait capable d’endosser 23 personnalités différentes. De son côté, le mystérieux homme souffrant du syndrome des os de verre Elijah Price suscite à nouveau l’intérêt des forces de l’ordre en affirmant détenir des informations capitales sur les deux hommes…", 'image' => "./images/glass.jpg"],
        ['titre' => "Antebellum", 'description' => "L'auteure à succès, Veronica Henley, se retrouve piégée dans un monde effroyable dont elle doit percer le mystère avant qu'il ne soit trop tard.", 'image' => "./images/Antebellum.jpg"],
        ['titre' => "Man on Fire", 'description' => "Le Mexique est en proie à une vague d'enlèvements sans précédent. Face au danger, certaines familles aisées engagent des gardes du corps pour assurer la protection rapprochée de leurs enfants.C'est dans ce contexte lourd de menaces que débarque à Mexico l'ancien agent de la CIA John Creasy. Appelé par son vieil ami Rayburn, ce dernier se voit proposer un job inattendu : bodyguard de la petite Pita Ramos, fille de l'industriel Samuel Ramos.La fillette, précoce, pleine de curiosité et de vitalité, insupporte John par ses questions personnelles. Pourtant, au fil des jours, Pita parvient à percer ses défenses. Après bien des années, celui-ci retrouve le goût de vivre.C'est alors que Pita est kidnappée. Bien que grièvement blessé, Creasy se lance à la poursuite des ravisseurs. Inflexible, il remonte la piste, se jurant de retrouver sa protégée.", 'image' => "./images/man-on-fire.jpg"],
        ['titre' => "Gemini Man", 'description' => "Henry Brogan, un tueur professionnel, est soudainement pris pour cible et poursuivi par un mystérieux et jeune agent qui peut prédire chacun de ses mouvements.", 'image' => "./images/gemini-man.jpg"],
        ['titre' => "Hitch : Expert en Séduction", 'description' => "Alex Hitchens est un entremetteur (marieur) professionnel qui utilise des moyens peu orthodoxes pour coacher ses clients et jouer avec le destin. Il réussit ainsi avec succès à unir des hommes ordinaires avec des femmes extraordinaires. Malgré tout cela, Hitch ne croit pas en l'amour. Pourtant sa rencontre avec Sara, une jeune journaliste sexy qui partage les mêmes points de vue cyniques sur les relations amoureuses va les amener sur un territoire inconnu...", 'image' => "./images/hitch.jpg"],
        ['titre' => "23", 'description' => "Histoire basée sur un fait réel, celle de Karl Koch, jeune pirate informatique de dix-neuf ans. Fascine par Hagbard Céline, personnage d'un roman, il fait preuve d'un talent sans faille pour accéder aux réseaux informatiques mondiaux pour les pirater. C'est ainsi que, courtise par le KGB, il en devient un agent. Mais, intoxique à la cocaïne, il souffre de plus en plus d'hallucinations et perd peu a peu le sens des réalités.", 'image' => "./images/23.jpg"],
        ['titre' => "Escape Game 2 : Le monde est un piège", 'description' => "Six personnes se retrouvent coincées à leur insu dans une autre série de jeux d'évasion et découvrent petit à petit ce qu'elles ont en commun pour les aider à survivre : que dans le passé, chacune d'entre elles a déjà eu à participer à ce jeu. Le groupe devra à nouveau déjouer les pièges mortels et s'en", 'image' => "./images/escape-game-2.jpg"],
        ['titre' => "Escape Game", 'description' => "Six personnes se retrouvent dans une situation incontrôlable ou seule leur intelligence leur permettra de survivre.", 'image' => "./images/escape-game.jpg"],
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        unset($_SESSION['films'][$_POST["delete"]]);
    }
    if (isset($_POST['add'])) {
        header('Location: add.php');
        die();
    }
    if (isset($_POST['edit'])) {
        $urlParameter = "?id=" . $_POST['edit'];
        header('Location: edit.php' . $urlParameter);
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Films</title>
</head>

<body>
    <main>
        <div class="movies">
            <?php foreach ($_SESSION['films'] as $movie => $data) : ?>
                <div class="movieCard">
                    <img src=<?= $data["image"]; ?> alt=<?= $data["titre"]; ?>>
                    <p><?= $data["titre"]; ?></p>
                    <p><?= $data["description"]; ?></p>
                    <div class="crudRow">
                        <form action="" method="POST"><button name="delete" value=<?= $movie; ?>>Delete</button></form>
                        <form action="" method="POST"><button name="add">Add</button></form>
                        <form action="" method="POST"><button name="edit" value=<?= $movie; ?>>Edit</button></form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>