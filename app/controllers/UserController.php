<?php

require_once 'models/User.php';

class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $user = User::findByLogin($login);

            if ($user && $user->password === $password) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['login'] = $user->login;
                header('Location: index.php');
            } else {
                echo "Invalid login or password.";
            }
        } else {
            require 'views/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $user = new User();
            $user->login = $login;
            $user->password = $password;
            $user->role = 'USER';

            if ($user->save()) {
                $_SESSION['user_id'] = $user->id;
                $_SESSION['login'] = $user->login;
                header('Location: index.php');
                exit;
            } else {
                echo "Error registering user.";
            }
        } else {
            require 'views/register.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
    }
}

?>
