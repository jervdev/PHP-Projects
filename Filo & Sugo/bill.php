<?php
echo '<h2>Your pasta table</h2>';
echo '<p>Customer: ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>';
if ($tasting) { echo '<p><strong>Assaggio Duo - half of each recipe</strong></p>'; }
echo '<p>' . htmlspecialchars($orderName) . '</p>';
$setLabel = $quantity == 1 ? 'set' : 'sets';
$guestLabel = $bill['Guests'] == 1 ? 'guest' : 'guests';
echo '<p>' . $quantity . ' ' . $servings[$size][0] . ' ' . $setLabel . ' - ' . $bill['Guests'] . ' ' . $guestLabel . '</p>';
echo '<p>Dining option: ' . $serviceName . '</p>';
echo '<table>';
foreach (['Pasta', 'Packaging', 'Total'] as $label) {
    echo '<tr><th>' . $label . '</th><td>PHP ' . number_format($bill[$label], 2) . '</td></tr>';
}
echo '</table>';
if ($bill['Savings'] > 0) {
    echo '<p class="success">Sharing saves PHP ' . number_format($bill['Savings'], 2) . ' compared with individual Piatto servings.</p>';
}

echo '<p>Table budget: PHP ' . number_format($budget, 2) . '</p>';
if ($budget > $bill['Total']) {
    echo '<p class="success">Budget left: PHP ' . number_format($budget - $bill['Total'], 2) . '</p>';
} elseif ($budget == $bill['Total']) {
    echo '<p class="success">Your table budget matches the bill.</p>';
} else {
    echo '<p class="error">You need PHP ' . number_format($bill['Total'] - $budget, 2) . ' more.</p>';
}
