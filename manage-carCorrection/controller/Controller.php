<?php

class Controller{

    public function render($view, $args = []){

        extract($args, EXTR_SKIP);

        require_once ROOT . "view" . DIRECTORY_SEPARATOR . "layout.php";

    }

}