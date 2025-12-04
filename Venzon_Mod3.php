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

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
?>

<?php
include "footer.php";
?>
