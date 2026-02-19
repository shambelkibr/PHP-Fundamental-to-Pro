<?php
/**
 * Loop Control Statements
 * 
 * break and continue statements control loop execution.
 */

echo "<h2>Loop Control Statements</h2>";

// Break statement in for loop
echo "<h3>1. Break in For Loop</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        echo "Breaking at $i<br>";
        break;
    }
    echo "Number: $i<br>";
}

// Continue statement
echo "<br><h3>2. Continue Statement</h3>";
for ($j = 1; $j <= 10; $j++) {
    if ($j % 2 == 0) {
        continue; // Skip even numbers
    }
    echo "Odd number: $j<br>";
}

// Break in while loop
echo "<br><h3>3. Break in While Loop</h3>";
$count = 1;
while (true) {
    echo "Count: $count<br>";
    $count++;
    if ($count > 5) {
        echo "Breaking loop<br>";
        break;
    }
}

// Continue in while loop
echo "<br><h3>4. Continue in While Loop</h3>";
$num = 0;
while ($num < 10) {
    $num++;
    if ($num % 3 == 0) {
        continue; // Skip multiples of 3
    }
    echo "Number: $num<br>";
}

// Break in nested loops
echo "<br><h3>5. Break in Nested Loops</h3>";
for ($x = 1; $x <= 3; $x++) {
    for ($y = 1; $y <= 3; $y++) {
        if ($x == 2 && $y == 2) {
            echo "Breaking inner loop at ($x, $y)<br>";
            break;
        }
        echo "($x, $y) ";
    }
    echo "<br>";
}

// Break with level (breaks outer loop)
echo "<br><h3>6. Break with Level</h3>";
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 3; $b++) {
        if ($a == 2 && $b == 2) {
            echo "Breaking outer loop at ($a, $b)<br>";
            break 2; // Breaks 2 levels
        }
        echo "($a, $b) ";
    }
    echo "<br>";
}

// Continue with level
echo "<br><h3>7. Continue with Level</h3>";
for ($m = 1; $m <= 3; $m++) {
    echo "Outer loop: $m<br>";
    for ($n = 1; $n <= 3; $n++) {
        if ($n == 2) {
            echo "  Skipping to next outer iteration<br>";
            continue 2;
        }
        echo "  Inner loop: $n<br>";
    }
}

// Practical example: Search in array
echo "<br><h3>8. Practical Example: Finding Element</h3>";
$products = ["laptop", "mouse", "keyboard", "monitor", "printer"];
$search = "keyboard";
$found = false;

foreach ($products as $index => $product) {
    if ($product === $search) {
        echo "Found '$search' at index $index<br>";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "'$search' not found<br>";
}

// Skip invalid data
echo "<br><h3>9. Skip Invalid Data</h3>";
$ages = [25, -5, 30, 0, 45, -10, 50];
echo "Valid ages: ";
foreach ($ages as $age) {
    if ($age <= 0) {
        continue; // Skip invalid ages
    }
    echo "$age ";
}
echo "<br>";

// Limit output
echo "<br><h3>10. Limiting Output</h3>";
$items = range(1, 100);
$displayCount = 0;
echo "First 10 even numbers from array:<br>";
foreach ($items as $item) {
    if ($item % 2 != 0) {
        continue; // Skip odd numbers
    }
    echo "$item ";
    $displayCount++;
    if ($displayCount >= 10) {
        break; // Stop after 10 items
    }
}
echo "<br>";

// Practical example: Validation
echo "<br><h3>11. Form Data Validation</h3>";
$formData = [
    "username" => "john_doe",
    "email" => "",
    "age" => 25,
    "city" => "New York"
];

echo "Validating form data:<br>";
foreach ($formData as $field => $value) {
    if (empty($value)) {
        echo "✗ $field is empty (skipped)<br>";
        continue;
    }
    echo "✓ $field: $value<br>";
}

?>
