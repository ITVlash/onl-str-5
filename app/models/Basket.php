<?php

class Basket {
    public $id;
    public $user_id;
    public $product_id;

    public function save() {
        $db = self::getDB();
        $stmt = $db->prepare('INSERT INTO Baskets (user_id, product_id) VALUES (?, ?)');
        return $stmt->execute([$this->user_id, $this->product_id]);
    }

    public static function findByUserId($user_id) {
        $db = self::getDB();
        $stmt = $db->prepare('SELECT Products.* FROM Baskets 
                              JOIN Products ON Baskets.product_id = Products.id 
                              WHERE Baskets.user_id = ?');
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
    }

    private static function getDB() {
        $dsn = 'mysql:host=db;dbname=test';
        $username = 'root';
        $password = 'root';
        return new PDO($dsn, $username, $password);
    }

    public static function remove($user_id, $product_id) {
        $db = self::getDB();
        $stmt = $db->prepare('DELETE FROM Baskets WHERE user_id = ? AND product_id = ?');
        return $stmt->execute([$user_id, $product_id]);
    }
}

?>
