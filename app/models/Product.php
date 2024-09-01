<?php
class Product {
    public $id;
    public $name;
    public $url;
    public $price;
    public $article;

    public static function all() {
        $db = self::getDB();
        $stmt = $db->query('SELECT * FROM Products');
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
    }

    public static function find($id) {
        $db = self::getDB();
        $stmt = $db->prepare('SELECT * FROM Products WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetchObject('Product');
    }

    private static function getDB() {
        $dsn = 'mysql:host=db;dbname=test';
        $username = 'root';
        $password = 'root';
        return new PDO($dsn, $username, $password);
    }
}
?>
