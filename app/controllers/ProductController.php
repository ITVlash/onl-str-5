<?php

require_once 'models/Product.php';

class ProductController {
    public function index() {
        $products = Product::all();
        require 'views/index.php';
    }

    public function viewProduct() {
        $productId = $_GET['id'];
        $product = Product::find($productId);
        require 'views/product.php';
    }
}

?>
