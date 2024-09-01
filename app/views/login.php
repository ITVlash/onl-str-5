<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход на сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Вход</h1>
    <form method="POST" action="index.php?action=login">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Войти</button>
    </form>
</body>
</html>
