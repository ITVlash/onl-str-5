<?php

require_once 'models/Basket.php';

class BasketController {
    public function addToBasket() {
        if (isset($_SESSION['user_id']) && isset($_GET['product_id'])) {
            $basket = new Basket();
            $basket->user_id = $_SESSION['user_id'];
            $basket->product_id = $_GET['product_id'];
            $basket->save();
            header('Location: index.php?action=basket');
        } else {
            echo "Please log in to add products to your basket.";
        }
    }

    public function viewBasket() {
        if (isset($_SESSION['user_id'])) {
            $basketItems = Basket::findByUserId($_SESSION['user_id']);
            require 'views/basket.php';
        } else {
            echo "Please log in to view your basket.";
        }
    }

    public function removeFromBasket() {
        if (isset($_SESSION['user_id']) && isset($_GET['product_id'])) {
            Basket::remove($_SESSION['user_id'], $_GET['product_id']);
            header('Location: index.php?action=basket');
        } else {
            echo "Произошла ошибка при удалении товара из корзины.";
        }
    }
}

?>
