<?php
session_start();

define('host', 'http://localhost/CloudCampus/Evaluation-eCommerce-MVC/');
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Evaluation-eCommerce-MVC' . DIRECTORY_SEPARATOR);

function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

$class = $_GET['class'];
$method = $_GET['method'] . 'Action';

require 'controller/' . $class . '.php';

$c = new $class();
$c->$method();
die;
