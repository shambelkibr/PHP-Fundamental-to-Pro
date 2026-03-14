<?php
/**
 * Operators in PHP
 * 
 * Operators are used to perform operations on variables and values.
 */

echo "<h2>PHP Operators</h2>";

// ARITHMETIC OPERATORS
echo "<h3>1. Arithmetic Operators</h3>";
$a = 10;
$b = 3;
echo "a = $a, b = $b<br>";
echo "Addition (a + b): " . ($a + $b) . "<br>";
echo "Subtraction (a - b): " . ($a - $b) . "<br>";
echo "Multiplication (a * b): " . ($a * $b) . "<br>";
echo "Division (a / b): " . ($a / $b) . "<br>";
echo "Modulus (a % b): " . ($a % $b) . "<br>";
echo "Exponentiation (a ** b): " . ($a ** $b) . "<br>";

// ASSIGNMENT OPERATORS
echo "<br><h3>2. Assignment Operators</h3>";
$x = 10;
echo "x = $x<br>";
$x += 5;
echo "After x += 5: $x<br>";
$x -= 3;
echo "After x -= 3: $x<br>";
$x *= 2;
echo "After x *= 2: $x<br>";
$x /= 4;
echo "After x /= 4: $x<br>";
$x %= 3;
echo "After x %= 3: $x<br>";

// COMPARISON OPERATORS
echo "<br><h3>3. Comparison Operators</h3>";
$m = 5;
$n = "5";
echo "m = $m (integer), n = '$n' (string)<br>";
echo "Equal (m == n): " . var_export($m == $n, true) . "<br>";
echo "Identical (m === n): " . var_export($m === $n, true) . "<br>";
echo "Not equal (m != n): " . var_export($m != $n, true) . "<br>";
echo "Not identical (m !== n): " . var_export($m !== $n, true) . "<br>";
echo "Greater than (m > 3): " . var_export($m > 3, true) . "<br>";
echo "Less than (m < 10): " . var_export($m < 10, true) . "<br>";
echo "Greater or equal (m >= 5): " . var_export($m >= 5, true) . "<br>";
echo "Less or equal (m <= 5): " . var_export($m <= 5, true) . "<br>";

// Spaceship operator (PHP 7+)
echo "Spaceship (m <=> 5): " . ($m <=> 5) . " (0 means equal)<br>";
echo "Spaceship (m <=> 3): " . ($m <=> 3) . " (1 means greater)<br>";
echo "Spaceship (m <=> 7): " . ($m <=> 7) . " (-1 means less)<br>";

// INCREMENT/DECREMENT OPERATORS
echo "<br><h3>4. Increment/Decrement Operators</h3>";
$counter = 5;
echo "Counter = $counter<br>";
echo "Post-increment (counter++): " . $counter++ . " (counter is now $counter)<br>";
echo "Pre-increment (++counter): " . ++$counter . " (counter is now $counter)<br>";
echo "Post-decrement (counter--): " . $counter-- . " (counter is now $counter)<br>";
echo "Pre-decrement (--counter): " . --$counter . " (counter is now $counter)<br>";

// LOGICAL OPERATORS
echo "<br><h3>5. Logical Operators</h3>";
$true1 = true;
$false1 = false;
echo "AND (true && false): " . var_export($true1 && $false1, true) . "<br>";
echo "OR (true || false): " . var_export($true1 || $false1, true) . "<br>";
echo "NOT (!true): " . var_export(!$true1, true) . "<br>";
echo "XOR (true xor false): " . var_export($true1 xor $false1, true) . "<br>";

// STRING OPERATORS
echo "<br><h3>6. String Operators</h3>";
$str1 = "Hello";
$str2 = "World";
echo "Concatenation (str1 . ' ' . str2): " . $str1 . " " . $str2 . "<br>";
$str1 .= " PHP";
echo "Concatenation assignment (str1 .= ' PHP'): $str1<br>";

// ARRAY OPERATORS
echo "<br><h3>7. Array Operators</h3>";
$arr1 = array("a" => "apple", "b" => "banana");
$arr2 = array("c" => "cherry", "a" => "apricot");
$result = $arr1 + $arr2;
echo "Union (arr1 + arr2): ";
print_r($result);
echo "<br>";

// CONDITIONAL OPERATOR (TERNARY)
echo "<br><h3>8. Conditional (Ternary) Operator</h3>";
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age: $age, Status: $status<br>";

// NULL COALESCING OPERATOR (PHP 7+)
echo "<br><h3>9. Null Coalescing Operator</h3>";
$username = null;
$display = $username ?? "Guest";
echo "Display name: $display<br>";
$username = "John";
$display = $username ?? "Guest";
echo "Display name: $display<br>";

?>
