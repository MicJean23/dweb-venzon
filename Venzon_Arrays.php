<?php
$flowers = [
    ['flower' => 'Rose', 'price' => 100],
    ['flower' => 'Carnation', 'price' => 150],
    ['flower' => 'Tulips', 'price' => 200],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Multidimensional Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Flower Shop</h1>
        <h2>Flowers</h2>
        <p><?php echo $flowers[0]['flower']; ?> = Php <?php echo $flowers[0]['price']; ?> </p>
        <p><?php echo $flowers[1]['flower']; ?> = Php <?php echo $flowers[1]['price']; ?> </p>
        <p><?php echo $flowers[2]['flower']; ?> = Php <?php echo $flowers[2]['price']; ?> </p>
    </body>
</html>
