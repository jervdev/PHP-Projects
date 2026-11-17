<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
require 'header.php';
require 'validate.php';
if (!$valid) {
    echo '<p class="error">Check your name, pasta choices, serving, sets, and budget.</p>';
    if (is_string($second) && $second !== 'none' && $second === $product) {
        echo '<p class="error">Choose two different pastas for Assaggio Duo.</p>';
    }
} else {
    $price = $pastas[$product][1];
    $orderName = $pastas[$product][0];
    $tasting = false;

    $sets = $quantity;
    $budget = round($budget, 2);
    $serviceName = $service === 'takeaway' ? 'Takeaway' : 'Dine-in';
    require 'calculate.php';
    $bill = $calculation;
    include 'bill.php';

}
echo '<p><a href="index.php">Plan another table</a></p>';
include 'footer.php';
