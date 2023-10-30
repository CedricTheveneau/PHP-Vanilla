<?php

class CartModel
{

    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function getProducts()
    {
        return $_SESSION['cart'];
    }

    public function addProduct($title, $description, $image, $price)
    {
        $_SESSION['cart'][] = ['title' => $title, 'description' => $description, 'image' => $image, 'price' => $price];
    }

    public function removeProduct($recievedId)
    {
        foreach ($_SESSION['cart'] as $id => $product) {
            if ($id == $recievedId) {
                unset($_SESSION['cart'][$id]);
            }
        }
    }
}
