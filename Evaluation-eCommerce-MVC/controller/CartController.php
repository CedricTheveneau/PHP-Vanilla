<?php
require_once ROOT . 'model/CartModel.php';
require_once 'Controller.php';

class CartController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new CartModel();
    }

    // /cart
    public function productListAction()
    {
        $products = $this->model->getProducts();
        $this->render('cart-view', [
            'products' => $products
        ]);
    }

    public function addProductAction()
    {
        $this->model->addProduct($_POST['title'], $_POST['description'], $_POST['image'], $_POST['price'],);
        header("Location: products");
    }

    public function removeProductAction()
    {
        $this->model->removeProduct($_POST['index']);
        header("Location: cart");
    }
}
