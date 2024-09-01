<?php
session_start();

require_once 'controllers/UserController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/BasketController.php';

$controller = null;
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    case 'register':
        $controller = new UserController();
        $controller->register();
        break;
    case 'logout':
        $controller = new UserController();
        $controller->logout();
        break;
    case 'product':
        $controller = new ProductController();
        $controller->viewProduct();
        break;
    case 'add_to_basket':
        $controller = new BasketController();
        $controller->addToBasket();
        break;
    case 'basket':
        $controller = new BasketController();
        $controller->viewBasket();
        break;
    case 'remove_from_basket':
        $controller = new BasketController();
        $controller->removeFromBasket();
        break;
    default:
        $controller = new ProductController();
        $controller->index();
        break;
}

?>
