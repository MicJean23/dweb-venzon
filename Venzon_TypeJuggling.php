<?php
$price = "50";
$quantity = 3;
$total = $price * $quantity;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Type Juggling</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Flower Shop</h1>
        <p>Price per flower: <?php echo $price; ?></p>
        <p>Quantity: <?php echo $quantity; ?></p>
        <p><strong>Total Price: </strong> <?php echo $total; ?></p>
    </body>
</html>
