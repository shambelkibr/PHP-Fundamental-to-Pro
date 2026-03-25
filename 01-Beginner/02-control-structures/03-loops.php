<?php


echo "<h2>PHP Loops</h2>";

// While loop

$i = 1;
while ($i <= 5) {
    echo "Count: $i<br>";
    $i++;
}

// Do...while loop

$j = 1;
do {
    echo "Value: $j<br>";
    $j++;
} while ($j <= 5);

// Do...while executes at least once

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

for ($m = 0; $m <= 10; $m += 2) {
    echo "Even number: $m<br>";
}

// Countdown with for loop

for ($n = 5; $n >= 1; $n--) {
    echo "Countdown: $n<br>";
}
echo "Blast off!<br>";

// Foreach loop with indexed array
$colors = ["red", "green", "blue", "yellow"];
foreach ($colors as $color) {
    echo "Color: $color<br>";
}

// Foreach with index

$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $index => $fruit) {
    echo "Index $index: $fruit<br>";
}

// Foreach with associative array

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

for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        $result = $row * $col;
        echo "$row × $col = $result | ";
    }
    echo "<br>";
}

// Pattern printing

for ($p = 1; $p <= 5; $p++) {
    for ($q = 1; $q <= $p; $q++) {
        echo "* ";
    }
    echo "<br>";
}

// Alternative syntax for foreach

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number):
    echo "Number: $number<br>";
endforeach;

// Practical example: List generation

$tasks = ["Buy groceries", "Do laundry", "Study PHP", "Exercise"];
echo "<ul>";
foreach ($tasks as $task) {
    echo "<li>$task</li>";
}
echo "</ul>";

// Summing numbers

$numbers = [10, 20, 30, 40, 50];
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Sum: $sum<br>";
echo "Average: " . ($sum / count($numbers)) . "<br>";

?>
