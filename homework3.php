<?php
$qty = 5;
$price = 200;

$totalAmount = $qty * $price;
$tax = ($totalAmount * 12.5) / 100;
$netAmount = $totalAmount + $tax;

echo "<h2>Arithmetic Operation Quiz</h2>";
echo "Quantity: " . $qty . "<br>";
echo "Price per item: Rs. " . $price . "<br>";
echo "Total Amount (without tax): Rs. " . $totalAmount . "<br>";
echo "Tax (12.5%): Rs. " . $tax . "<br>";
echo "<strong>Net Amount to Pay: Rs. " . $netAmount . "</strong>";
?>
