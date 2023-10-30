<?php
require_once ROOT . 'model/ProductModel.php';
require_once 'Controller.php';

class AdminController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    // /admin
    public function adminProductListAction()
    {
        $products = $this->model->getProducts();
        $this->render('admin', [
            'products' => $products
        ]);
    }

    // /form-add-car
    public function addProductFormAction()
    {
        $this->render('add-product-view');
    }

    // /form-add-car
    public function modifyProductFormAction()
    {
        $product = $this->model->getSpecificProduct($_POST['index']);
        $this->render('modify-product-view', [
            'product' => $product
        ]);
    }

    // addCar
    public function addProductAction()
    {
        $this->model->addProduct($_POST['title'], $_POST['description'], $_POST['image'], $_POST['price']);
        header("Location: admin");
    }

    // addCar
    public function modifyProductAction()
    {
        $product = $this->model->modifyProduct($_POST['index'], $_POST['title'], $_POST['description'], $_POST['image'], $_POST['price']);
        header("Location: admin");
    }
    // removeCar

    public function removeProductAction()
    {
        $this->model->removeProduct($_POST['index']);
        header("Location: admin");
    }
}
