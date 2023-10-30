<?php
session_start();
// echo "<pre>" . print_r($_SESSION["panier"]) . "</pre>";
function emptyBasket()
{
    unset($_SESSION['panier']);
}

if (isset($_SESSION['panier'])) {
    $addedItems = $_SESSION['panier'];

    foreach ($addedItems as $item => $info) {
        $total = $info[0] * $info[1];
        global $cartTotal;
        $cartTotal = $cartTotal + $total;
        echo "<p>$item</p><p>x" . $info[0] . " - Total : " . $total  . "€</p>";
    }

    echo "<p>Total du panier : " . $cartTotal . "€</p>";

    if (isset($_POST['emptyCart'])) {
        emptyBasket();
    }

    echo "<form method='POST'><button type='submit' name='emptyCart'>Empty basket</button></form>";
    echo "<br/><a href='index.php'>Voir les produits</a>";
} else {
    echo "Panier vide";
    if (isset($_POST['emptyCart'])) {
        emptyBasket();
    }

    echo "<form method='POST'><button type='submit' name='emptyCart'>Empty basket</button></form>";
    echo "<br/><a href='index.php'>Voir les produits</a>";
}
