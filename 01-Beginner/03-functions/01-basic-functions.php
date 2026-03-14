<?php
/**
 * Basic Functions in PHP
 */

echo "<h2>PHP Functions Basics</h2>";

// Simple function
echo "<h3>1. Simple Function</h3>";
function greet() {
    echo "Hello, World!<br>";
}
greet();

// Function with parameters
echo "<br><h3>2. Function with Parameters</h3>";
function greetUser($name) {
    echo "Hello, $name!<br>";
}
greetUser("Alice");
greetUser("Bob");

// Function with multiple parameters
echo "<br><h3>3. Multiple Parameters</h3>";
function introduce($name, $age, $city) {
    echo "$name is $age years old and lives in $city.<br>";
}
introduce("John", 25, "New York");

// Function with return value
echo "<br><h3>4. Return Value</h3>";
function add($a, $b) {
    return $a + $b;
}
$result = add(5, 3);
echo "5 + 3 = $result<br>";

// Function with default parameters
echo "<br><h3>5. Default Parameters</h3>";
function greetWithTime($name, $time = "day") {
    echo "Good $time, $name!<br>";
}
greetWithTime("Alice");
greetWithTime("Bob", "evening");

// Type declarations (PHP 7+)
echo "<br><h3>6. Type Declarations</h3>";
function multiply(int $a, int $b): int {
    return $a * $b;
}
echo "5 × 3 = " . multiply(5, 3) . "<br>";

// Return type declaration
echo "<br><h3>7. Return Type Declaration</h3>";
function getFullName(string $first, string $last): string {
    return $first . " " . $last;
}
echo "Full name: " . getFullName("John", "Doe") . "<br>";

// Void functions (PHP 7.1+)
echo "<br><h3>8. Void Function</h3>";
function logMessage(string $message): void {
    echo "[LOG] $message<br>";
}
logMessage("This is a log entry");

// Practical examples
echo "<br><h3>9. Practical Examples</h3>";

function calculateArea($length, $width) {
    return $length * $width;
}

function formatCurrency($amount) {
    return "$" . number_format($amount, 2);
}

function isEven($number) {
    return $number % 2 == 0;
}

echo "Area (5 × 3): " . calculateArea(5, 3) . "<br>";
echo "Formatted: " . formatCurrency(1234.567) . "<br>";
echo "Is 4 even? " . (isEven(4) ? "Yes" : "No") . "<br>";
echo "Is 7 even? " . (isEven(7) ? "Yes" : "No") . "<br>";

?>
