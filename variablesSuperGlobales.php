<?php

// $_GET : Permet de récupérer les informations dans l'url

// if(isset($_GET['prenom']) && !empty($_GET['prenom'])){
//     echo 'prenom existe';
// }

// $_POST : Permet de récupérer les informations envoyés via un formulaire

// echo htmlentities($_POST['prenom']); // Permet de se prémunir de la faille XSS
?>

<form method="POST" action="" enctype="multipart/form-data">
    <input type="text" name="prenom" />
    <input type="file" name="monfichier" />
    <input type="submit" value="Envoyer" />
</form>

<?php
// $_REQUEST

// echo '<pre>'.print_r($_REQUEST, true) . '</pre>';

// $_COOKIE : Permet de récupérer les valeurs stockées dans les cookies du navigateur de l'utilisateur

// if(!isset($_COOKIE['utilisateur']) || empty($_COOKIE['utilisateur'])){
//     setcookie("utilisateur", "John", time() + 3600*24 );
// }

// echo 'Salut ' . $_COOKIE['utilisateur'];

// $_SESSION : Permet de stocker des données sur la session de l'utilisateur

// session_start();
// if(!isset($_SESSION['utilisateur']) || empty($_SESSION['utilisateur'])){
//     $_SESSION['utilisateur'] = 'John';  
// }

// $_SESSION['utilisateur'] = false;

// session_destroy();

// $_FILES

// echo '<pre>'.print_r($_FILES, true) . '</pre>';

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $nomFichier = $_FILES['monfichier']['name'];
//     move_uploaded_file($_FILES['monfichier']['tmp_name'], "uploads/$nomFichier");
// }

// $_SERVER : contient les infos sur le serveur et l'environnement d'éxécution du code

// echo '<pre>'.print_r($_SERVER, true) . '</pre>';

// $_ENV : Contient un tableau avec les variables d'environnement

// $_ENV['environnement_dev'] = 'production';

// echo '<pre>'.print_r($_ENV, true) . '</pre>';

// $GLOBALS

$variable_globale = 'hello world';

function affichervarGlobale()
{
    echo $GLOBALS['variable_globale'];
}

affichervarGlobale();
