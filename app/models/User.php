<?php

class User {
    public $id;
    public $login;
    public $password;
    public $role;

    public static function findByLogin($login) {
        $db = self::getDB();
        $stmt = $db->prepare('SELECT * FROM Users WHERE login = ?');
        $stmt->execute([$login]);
        return $stmt->fetchObject('User');
    }

    public function save() {
        $db = self::getDB();
        $stmt = $db->prepare('INSERT INTO Users (login, password, role) VALUES (?, ?, ?)');
        return $stmt->execute([$this->login, $this->password, $this->role]);
    }

    private static function getDB() {
        $dsn = 'mysql:host=db;dbname=test';
        $username = 'root';
        $password = 'root';
        return new PDO($dsn, $username, $password);
    }
}

?>
