<?php
// Define two numbers
$number1 = 10;   // Replace with any number you want
$number2 = 5;    // Replace with any number you want

// Calculate sum, difference, product, and quotient
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;

// Check if the second number is not zero before calculating the quotient
if ($number2 != 0) {
    $quotient = $number1 / $number2;
} else {
    $quotient = "Undefined (division by zero)";
}

// Display the results
echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br><br>";

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
?>