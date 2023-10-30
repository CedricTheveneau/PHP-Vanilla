<?php

class ProductModel
{

    public function __construct()
    {
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }
    }

    public function getProducts()
    {
        return $_SESSION['products'];
    }

    public function addProduct($title, $description, $image, $price)
    {
        $_SESSION['products'][] = ['title' => $title, 'description' => $description, 'image' => $image, 'price' => $price];
    }

    public function removeProduct($recievedId)
    {
        foreach ($_SESSION['products'] as $id => $product) {
            if ($id == $recievedId) {
                unset($_SESSION['products'][$id]);
            }
        }
    }

    public function modifyProduct($recievedId, $title, $description, $image, $price)
    {
        foreach ($_SESSION['products'] as $id => $product) {
            if ($id == $recievedId) {
                $_SESSION['products'][$id] = ['title' => $title, 'description' => $description, 'image' => $image, 'price' => $price];
            }
        }
    }

    public function getSpecificProduct($recievedId)
    {
        $specificProduct = null;
        foreach ($_SESSION['products'] as $id => $product) {
            if ($id == $recievedId) {
                return $specificProduct = ['title' => $product['title'], 'description' => $product['description'], 'image' => $product['image'], 'price' => $product['price'], 'index' => $id];
            }
        }
    }
}
