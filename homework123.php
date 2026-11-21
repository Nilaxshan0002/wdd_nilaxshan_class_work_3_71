<?php

$qty = 5;           // Quantity
$price = 400;       // Price item

$totalAmount = $qty * $price;

// Calculate 12.5% tax
$tax = ($totalAmount * 12.5) / 100;

$netAmount = $totalAmount + $tax;

echo "<h1>Arithmetic Operation Quiz</h1>";
echo "Quantity: " . $qty . "<br />";
echo "Price per item: Rs. " . $price . "<br />";
echo "Total Amount (without tax): Rs. " . $totalAmount . "<br />";
echo "Tax (12.5%): Rs. " . $tax . "<br />";
echo "<strong>Net Amount to Pay: Rs. " . $netAmount . "</strong>";
?>
