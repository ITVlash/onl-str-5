<header>
    <a href="/">
        <img src="/sofas_data/logo.png" alt="Logo">
    </a>
    <?php if (isset($_SESSION['login'])): ?>
        <span>Вы вошли как: <?php echo $_SESSION['login']; ?></span>
        <a href="index.php?action=basket">Корзина</a>
        <a href="index.php?action=logout">Выйти</a>
    <?php else: ?>
        <a href="index.php?action=login">Войти</a>
        <a href="index.php?action=register">Зарегистрироваться</a>
    <?php endif; ?>
</header>
