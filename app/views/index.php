<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Наш ассортимент</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="/sofas_data/<?php echo htmlspecialchars($product->url); ?>/1.webp">
                <h2><?php echo htmlspecialchars($product->name); ?></h2>
                <p>Цена: <?php echo htmlspecialchars($product->price); ?> рублей</p>
                <a class="action-link" href="index.php?action=product&id=<?php echo htmlspecialchars($product->id); ?>">Подробнее...</a>
                <?php if (isset($_SESSION['login'])): ?>
                    <a class="action-link" href="index.php?action=add_to_basket&product_id=<?php echo htmlspecialchars($product->id); ?>">Добавить в корзину</a>
                <?php endif; ?>
                </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
