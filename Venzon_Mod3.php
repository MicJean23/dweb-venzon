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

<table border="1" cellpadding="10">
    <tr>
        <th>Product Name</th>
        <th>Price (Php)</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value (Php)</th>
        <th>Tax Due (Php)</th>
    </tr>

<?php
foreach ($flowers as $product_name => $data) {
    $price = $data["price"];
    $stock = $data["stock"];
?>
    <tr>
        <td><?php echo $product_name; ?></td>
        <td><?php echo number_format($price, 2); ?></td>
        <td><?php echo $stock; ?></td>
        <td><?php echo get_reorder_message($stock); ?></td>
        <td><?php echo number_format(get_total_value($price, $stock), 2); ?></td>
        <td><?php echo number_format(get_tax_due($price, $stock, $tax_rate), 2); ?></td>
    </tr>
<?php
}
?>
</table>

<?php
include "footer.php";
?>
