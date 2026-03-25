<?php

// Simple function

function greet() {
    echo "Hello, World!<br>";
}
greet();

// Function with parameters

function greetUser($name) {
    echo "Hello, $name!<br>";
}
greetUser("Alice");
greetUser("Bob");

// Function with multiple parameters

function introduce($name, $age, $city) {
    echo "$name is $age years old and lives in $city.<br>";
}
introduce("John", 25, "New York");

// Function with return value

function add($a, $b) {
    return $a + $b;
}
$result = add(5, 3);
echo "5 + 3 = $result<br>";

// Function with default parameters

function greetWithTime($name, $time = "day") {
    echo "Good $time, $name!<br>";
}
greetWithTime("Alice");
greetWithTime("Bob", "evening");

// Type declarations (PHP 7+)

function multiply(int $a, int $b): int {
    return $a * $b;
}
echo "5 × 3 = " . multiply(5, 3) . "<br>";

// Return type declaration

function getFullName(string $first, string $last): string {
    return $first . " " . $last;
}
echo "Full name: " . getFullName("John", "Doe") . "<br>";


// Practical examples

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
