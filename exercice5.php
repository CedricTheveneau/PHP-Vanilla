<?php

/*

Afficher la phrase suivante en utilisant la variable superglobale $_SERVER :

"Le nom de votre serveur est ***, l'application s'éxécute sur le port ***, l'adresse email de l'administrateur est *** et la methode utilisée pour accéder à cette page est ***"

Remplacez les étoiles par les valeur se trouvant dans la variable $_SERVER (Utilisez la fonction print_r pour voir le contenu de cette variable).

Correction :
*/

print_r($_SERVER); // Displays all server's info

echo "<p>Le nom de mon server est " . $_SERVER['SERVER_NAME'] . " l'application s'execute sur le port " . $_SERVER['SERVER_PORT'] . ", l'adresse email de l'administrateur est " . $_SERVER['SERVER_ADMIN'] . " et la méthode utilisée pour accéder à cette page est " . $_SERVER['REQUEST_METHOD'] . "</p>";
