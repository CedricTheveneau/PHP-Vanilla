<?php
require_once ROOT . 'model/ProductModel.php';
require_once 'Controller.php';

class ProductController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    // /products
    public function productListAction()
    {
        $products = $this->model->getProducts();
        $this->render('list-product-view', [
            'products' => $products
        ]);
    }

    public function productDetailsAction()
    {
        $product = $this->model->getSpecificProduct($_POST['index']);
        $this->render('detail-product-view', [
            'product' => $product
        ]);
    }
}
