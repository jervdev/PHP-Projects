<?php
declare(strict_types=1);

// Stock is counted in Piatto servings.
$pasta_stock = [
    'Spaghetti alla Carbonara' => ['price' => 220.00, 'stock' => 12],
    'Cacio e Pepe' => ['price' => 190.00, 'stock' => 8],
    "Bucatini all'Amatriciana" => ['price' => 230.00, 'stock' => 15],
    'Tagliatelle al Ragù' => ['price' => 250.00, 'stock' => 6],
    'Trofie al Pesto' => ['price' => 210.00, 'stock' => 10],
    'Pasta alla Norma' => ['price' => 220.00, 'stock' => 0],
    "Penne all'Arrabbiata" => ['price' => 200.00, 'stock' => 18],
    'Rigatoni alla Gricia' => ['price' => 240.00, 'stock' => 7],
    'Linguine al Limone' => ['price' => 210.00, 'stock' => 9]
];
$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return $stock < 10 ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return $price * $quantity * ($tax_rate / 100);
}

require 'header.php';
?>
<h2>Pasta stock</h2>
<p>Stock is counted in Piatto servings. Tax rate: <?php echo $tax_rate; ?>%.</p>
<table>
    <tr>
        <th>Product</th><th>Stock</th><th>Reorder?</th>
        <th>Total value</th><th>Tax due</th>
    </tr>
    <?php foreach ($pasta_stock as $product_name => $data) { ?>
        <tr>
            <td><?php echo htmlspecialchars($product_name); ?></td>
            <td><?php echo $data['stock']; ?></td>
            <td><?php echo get_reorder_message($data['stock']); ?></td>
            <td>PHP <?php echo number_format(get_total_value($data['price'], $data['stock']), 2); ?></td>
            <td>PHP <?php echo number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2); ?></td>
        </tr>
    <?php } ?>
</table>
<p>Reorder any pasta with fewer than 10 servings left.</p>
<p><a href="index.php">Back to the menu</a></p>
<?php include 'footer.php'; ?>
