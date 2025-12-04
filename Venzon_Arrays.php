<?php
include "header.php";
?>

<h2>FLOWER BASKET</h2>

<?php
$flowers = [
    "Tulips" => ["price" => 45.50, "stock" => 67],
    "Roses" => ["price" => 30.00, "stock" => 8],
    "Sunflowers" => ["price" => 25.75, "stock" => 15],
    "Orchids" => ["price" => 120.00, "stock" => 3],
    "Daisies" => ["price" => 18.00, "stock" => 22]
];

$tax_rate = 12;
?>

<?php
include "footer.php";
?>
