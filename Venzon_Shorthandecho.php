<?php
$name = 'Jean';
$favorites = ['Rose', 'Tulips', 'Carnation',];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Using Short Hand echo</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Flower Shop</h1>
        <h2>Welcome <?= $name ?></h2>
        <p>Your Favorite Flower is: <?= $favorites[1] ?>.</p>
    </body>
</html>
