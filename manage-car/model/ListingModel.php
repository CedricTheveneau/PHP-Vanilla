<?php


class ListingModel
{

    public function __construct()
    {
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = [];
        }
    }

    public function getListings()
    {
        return $_SESSION['list'];
    }

    public function addListing($make, $model, $image)
    {
        $_SESSION['list'][] = ['make' => $make, 'model' => $model, 'image' => $image];
    }

    public function removeListing($model)
    {
        foreach ($_SESSION['list'] as $id => $element) {
            if ($element['model'] == $model) {
                unset($_SESSION['list'][$id]);
            }
        }
    }
}
