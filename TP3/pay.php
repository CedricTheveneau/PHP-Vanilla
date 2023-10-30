<?php

// 6 - Page de Remerciements :
// Page finale remerciant l'utilisateur après le paiement.

session_start();

if (isset($_SESSION['user']['cart'])) {
    unset($_SESSION['user']['cart']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thank you for your purschase !</title>
</head>

<body>
    <header>
        <a href="index.php"><img class="logo" src="./images/amazingLogo.png" alt="Logo"></a>
        <nav>
            <ul>
                <li><button><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a></button></li>
                <li><button><a href="backoffice.php">Back-Office</a></button></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><a href="cart.php">Cart</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><a href="order.php">Shipping info</a></li>
                <span style="font-size:11px;display:grid;align-items:center;">></span>
                <li><a href="pay.php">Thank you for shopping with us</a></li>
            </ul>
        </div>
        <h2 style="font-weight: bold;font-size:30px;text-transform:uppercase;text-align:center;margin-block:15px;">Thank you for your purschase !</h2>
        <p style="font-size:15px;text-align:center;">Your order has been registered, our team will soon start preparing it for shipping.</p>
        <p style="font-size:15px;text-align:center;">Your order should arrive in a few days.</p>
        <h2 style="font-weight: bold;font-size:20px;text-transform:uppercase;text-align:center;margin-block:30px;">Thanks again for shopping with us. We can't wait to serve you again !</h2>
        <button class="CTA"><a href="index.php"><span style="font-size:20px;">→ </span>Get back to the home page</a></button>
    </main>
</body>

</html>