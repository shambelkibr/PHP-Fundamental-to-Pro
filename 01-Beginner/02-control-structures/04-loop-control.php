<?php


// Break statement in for loop

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        echo "Breaking at $i<br>";
        break;
    }
    echo "Number: $i<br>";
}

// Continue statement

for ($j = 1; $j <= 10; $j++) {
    if ($j % 2 == 0) {
        continue; // Skip even numbers
    }
    echo "Odd number: $j<br>";
}

// Break in while loop

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

$num = 0;
while ($num < 10) {
    $num++;
    if ($num % 3 == 0) {
        continue; // Skip multiples of 3
    }
    echo "Number: $num<br>";
}

// Break in nested loops

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
