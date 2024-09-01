<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ваша корзина</h1>
    <div class="basket-items">
        <?php if (empty($basketItems)): ?>
            <p>Ваша корзина пуста.</p>
        <?php else: ?>
            <?php foreach ($basketItems as $product): ?>
                <div class="basket-item">
                    <img src="/sofas_data/<?php echo htmlspecialchars($product->url); ?>/1.webp">
                    <h2><?php echo htmlspecialchars($product->name); ?></h2>
                    <p>Цена: <?php echo htmlspecialchars($product->price); ?> рублей</p>
                    <a class="action-link" href="index.php?action=product&id=<?php echo htmlspecialchars($product->id); ?>">Подробнее...</a>
                    <a class="action-link" href="index.php?action=remove_from_basket&product_id=<?php echo htmlspecialchars($product->id); ?>">Удалить</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
