<?php
echo '<h2>Your pasta table</h2>';
echo '<p>Customer: ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>';
echo '<p>' . htmlspecialchars($orderName) . '</p>';
$setLabel = $quantity == 1 ? 'set' : 'sets';
echo '<p>' . $quantity . ' Piatto ' . $setLabel . '</p>';
echo '<table>';
foreach ($bill as $label => $amount) {
    echo '<tr><th>' . $label . '</th><td>PHP ' . number_format($amount, 2) . '</td></tr>';
}
echo '</table><p>Table budget: PHP ' . number_format($budget, 2) . '</p>';
if ($budget > $bill['Total']) {
    echo '<p class="success">Budget left: PHP ' . number_format($budget - $bill['Total'], 2) . '</p>';
} elseif ($budget == $bill['Total']) {
    echo '<p class="success">Your table budget matches the bill.</p>';
} else {
    echo '<p class="error">You need PHP ' . number_format($bill['Total'] - $budget, 2) . ' more.</p>';
}
