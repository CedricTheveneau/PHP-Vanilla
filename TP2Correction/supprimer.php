<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['films'][$_GET['id']])) {
    unset($_SESSION['films'][$_GET['id']]);
}

header('Location: index.php');
