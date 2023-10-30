<?php
// Front controller
session_start();

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// debug($_SESSION);

$class = $_GET['class'];
$method = $_GET['method'];


$dir = __DIR__. DIRECTORY_SEPARATOR;
require_once 'controller/TaskController.php';

$controller = new $class();
$controller->$method();