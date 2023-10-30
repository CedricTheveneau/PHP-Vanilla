<?php
session_start();
unset($_SESSION['admin_logged_in']); // Déconnecte l'administrateur
header('Location: admin_login.php'); // Redirige vers la page de login d'admin
exit();
?>
