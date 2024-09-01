<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О товаре</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($product->name); ?></h1>
    <div class="product-cart">
        <div class="product-images">
            <img src="/sofas_data/<?php echo htmlspecialchars($product->url); ?>/1.webp">
            <img src="/sofas_data/<?php echo htmlspecialchars($product->url); ?>/2.webp">
            <img src="/sofas_data/<?php echo htmlspecialchars($product->url); ?>/3.webp">
        </div>
        <div class="product-specifications">
            <p>Цена: <?php echo htmlspecialchars($product->price); ?> рублей</p>
            <p><?php echo nl2br(htmlspecialchars($product->info)); ?></p>
            <?php if (isset($_SESSION['login'])): ?>
                <a class="action-link" href="index.php?action=add_to_basket&product_id=<?php echo htmlspecialchars($product->id); ?>">Добавить в корзину</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
