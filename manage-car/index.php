<?php
session_start();

// Fonction debug pour checker une variable - à retirer une fois le développement terminé
function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
// debug($_SESSION);

$class = $_GET['class'];
$method = $_GET['method'];

// Récupère l'URL absolue, en tenant compte de si l'on utilise des forward ou back slash (en fonction de l'OS)
$dir = __DIR__ . DIRECTORY_SEPARATOR;
// Call le Controller qui va gérer toutes les actions
require_once 'controller/ListingController.php';

// Utilise les méthodes GET pour récupérer dynamiquement quelle action effectuer
$controller = new $class();
$controller->$method();
