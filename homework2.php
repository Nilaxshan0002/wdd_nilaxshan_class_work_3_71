<?php
$qty = 5;
$price = 200;

$totalAmount = $qty * $price;

// Calculate 12.5% tax
$tax = ($totalAmount * 12.5) / 100;

// Calculate net amount
$netAmount = $totalAmount + $tax;

// Display results
echo "Total Amount (without tax): Rs. " . $totalAmount . "<br>";
echo "Tax (12.5%): Rs. " . $tax . "<br>";
echo "Net Amount to Pay: Rs. " . $netAmount;
?>
