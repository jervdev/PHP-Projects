<?php
// Try 1 to 5 sets of the same pasta choice and serving size.
$sets = 1;
$affordable = 0;
do {
    include 'calculate.php';
    if ($calculation['Total'] <= $budget) {
        $affordable = $sets;
    }
    $sets++;
} while ($sets <= 5);
$affordableLabel = $affordable == 1 ? 'set' : 'sets';
echo '<h3>Table planner</h3>';
echo '<p>This budget covers ' . $affordable . ' ' . $servings[$size][0] . ' ' . $affordableLabel . ' (maximum 5).</p>';
echo '<p>Guests covered: ' . ($affordable * $servings[$size][1]) . '</p>';
