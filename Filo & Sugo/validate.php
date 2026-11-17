<?php
$nameInput = $_POST['customer_name'] ?? '';
$name = is_string($nameInput) ? trim($nameInput) : '';
$product = $_POST['product'] ?? '';
$quantity = filter_var($_POST['quantity'] ?? null, FILTER_VALIDATE_INT);
$budget = filter_var($_POST['budget'] ?? null, FILTER_VALIDATE_FLOAT);
$size = filter_var($_POST['size'] ?? null, FILTER_VALIDATE_INT);
$service = $_POST['service'] ?? '';
$second = 'none';
$valid = $name !== '' && is_string($product) && isset($pastas[$product])
    && $quantity !== false && $quantity !== null && $quantity >= 1 && $quantity <= 5
    && $budget !== false && $budget !== null && $budget >= 0 && is_finite($budget);
$valid = $valid && $size !== false && $size !== null && $size >= 0 && $size < count($servings)
    && in_array($service, ['dinein', 'takeaway'], true);
