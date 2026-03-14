<?php
/**
 * Loops in PHP
 * 
 * Loops are used to execute the same block of code multiple times.
 */

echo "<h2>PHP Loops</h2>";

// While loop
echo "<h3>1. While Loop</h3>";
$i = 1;
while ($i <= 5) {
    echo "Count: $i<br>";
    $i++;
}

// Do...while loop
echo "<br><h3>2. Do...While Loop</h3>";
$j = 1;
do {
    echo "Value: $j<br>";
    $j++;
} while ($j <= 5);

// Do...while executes at least once
echo "<br><h3>3. Do...While (executes at least once)</h3>";
$x = 10;
do {
    echo "This prints even though x >= 10: $x<br>";
} while ($x < 5);

// For loop
echo "<br><h3>4. For Loop</h3>";
for ($k = 1; $k <= 5; $k++) {
    echo "Iteration: $k<br>";
}

// For loop with different increment
echo "<br><h3>5. For Loop (counting by 2)</h3>";
for ($m = 0; $m <= 10; $m += 2) {
    echo "Even number: $m<br>";
}

// Countdown with for loop
echo "<br><h3>6. Countdown</h3>";
for ($n = 5; $n >= 1; $n--) {
    echo "Countdown: $n<br>";
}
echo "Blast off!<br>";

// Foreach loop with indexed array
echo "<br><h3>7. Foreach with Indexed Array</h3>";
$colors = ["red", "green", "blue", "yellow"];
foreach ($colors as $color) {
    echo "Color: $color<br>";
}

// Foreach with index
echo "<br><h3>8. Foreach with Index</h3>";
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $index => $fruit) {
    echo "Index $index: $fruit<br>";
}

// Foreach with associative array
echo "<br><h3>9. Foreach with Associative Array</h3>";
$person = [
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York",
    "occupation" => "Developer"
];
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Nested loops
echo "<br><h3>10. Nested Loops</h3>";
echo "Multiplication table (3x3):<br>";
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        $result = $row * $col;
        echo "$row × $col = $result | ";
    }
    echo "<br>";
}

// Pattern printing
echo "<br><h3>11. Pattern Printing</h3>";
for ($p = 1; $p <= 5; $p++) {
    for ($q = 1; $q <= $p; $q++) {
        echo "* ";
    }
    echo "<br>";
}

// Alternative syntax for foreach
echo "<br><h3>12. Alternative Syntax</h3>";
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number):
    echo "Number: $number<br>";
endforeach;

// Practical example: List generation
echo "<br><h3>13. Practical Example: HTML List</h3>";
$tasks = ["Buy groceries", "Do laundry", "Study PHP", "Exercise"];
echo "<ul>";
foreach ($tasks as $task) {
    echo "<li>$task</li>";
}
echo "</ul>";

// Summing numbers
echo "<br><h3>14. Calculating Sum</h3>";
$numbers = [10, 20, 30, 40, 50];
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Sum: $sum<br>";
echo "Average: " . ($sum / count($numbers)) . "<br>";

?>
