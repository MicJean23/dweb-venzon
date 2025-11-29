<?php
$item = 'Tulips';
$stock = 67;
$wanted = 17;
$can_buy = ($wanted <= $stock);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comparison Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Flower Shop</h1>
        <h2>Flower Basket</h2>
        <p>Flowers: <?= $item ?></p>
        <p>Stock: <?= $stock ?></p>
        <p>Wanted: <?= $wanted ?></p>
        <p>Can buy: <?= $can_buy ?></p>
    </body>
</html>
