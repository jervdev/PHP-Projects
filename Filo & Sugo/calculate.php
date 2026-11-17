<?php
// Uses $price, $size, $sets, and $service.
$factor = match ($size) { 0 => 1, 1 => 1.8, 2 => 3.4 };
$guests = $servings[$size][1] * $sets;
$pastaTotal = round($price * $factor * $sets, 2);
$savings = round($price * $guests - $pastaTotal, 2);
switch ($service) {
    case 'takeaway':
        $packaging = 15 * $sets;
        break;
    default:
        $packaging = 0;
}
$total = round($pastaTotal + $packaging, 2);
$calculation = [
    'Pasta' => $pastaTotal,
    'Packaging' => $packaging,
    'Total' => $total,
    'Guests' => $guests,
    'Savings' => $savings,
    'Per guest' => round($total / $guests, 2)
];
