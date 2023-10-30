<?php
session_start();

define('host', 'http://localhost/cloudcampus/7-s15-php-poo/tp-library-v2-mvc/');
define('ROOT', dirname(__DIR__).DIRECTORY_SEPARATOR.'tp-library-v2-mvc'.DIRECTORY_SEPARATOR);

function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// debug($_SESSION);

$class = $_GET['class'];
$method = $_GET['method'].'Action';

require 'controller/'.$class.'.php';

$c = new $class();
$c->$method();
die;