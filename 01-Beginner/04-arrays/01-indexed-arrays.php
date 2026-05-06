<?php

// Creating indexed arrays

$fruits = array("Apple", "Banana", "Orange");
$colors = ["Red", "Green", "Blue"]; // Short syntax (PHP 5.4+)

echo "Fruits: " . implode(", ", $fruits) . "<br>";
echo "Colors: " . implode(", ", $colors) . "<br>";

// Accessing array elements

echo "First fruit: " . $fruits[0] . "<br>";
echo "Second fruit: " . $fruits[1] . "<br>";
echo "Third color: " . $colors[2] . "<br>";

// Modifying array elements

$numbers = [1, 2, 3, 4, 5];
echo "Original: " . implode(", ", $numbers) . "<br>";
$numbers[2] = 30;
echo "After modifying index 2: " . implode(", ", $numbers) . "<br>";

// Adding elements

$animals = ["Dog", "Cat"];
echo "Original: " . implode(", ", $animals) . "<br>";
$animals[] = "Bird"; // Add to end
echo "After adding: " . implode(", ", $animals) . "<br>";
array_push($animals, "Fish", "Rabbit");
echo "After push: " . implode(", ", $animals) . "<br>";

// Removing elements

$items = ["A", "B", "C", "D", "E"];
echo "Original: " . implode(", ", $items) . "<br>";
unset($items[2]);
echo "After unset(2): " . implode(", ", $items) . "<br>";
$last = array_pop($items);
echo "Popped: $last, Remaining: " . implode(", ", $items) . "<br>";

// Array length

$days = ["Mon", "Tue", "Wed", "Thu", "Fri"];
echo "Number of days: " . count($days) . "<br>";

// Looping through arrays

$scores = [85, 92, 78, 95, 88];
foreach ($scores as $score) {
    echo "Score: $score<br>";
}

// Loop with index

$cities = ["New York", "London", "Tokyo", "Paris"];
foreach ($cities as $index => $city) {
    echo "City $index: $city<br>";
}

// Checking if element exists

$vegetables = ["Carrot", "Tomato", "Lettuce"];
if (in_array("Tomato", $vegetables)) {
    echo "Tomato is in the array<br>";
}
if (isset($vegetables[1])) {
    echo "Index 1 exists: " . $vegetables[1] . "<br>";
}

// Practical example

$cart = [];
$cart[] = "Laptop";
$cart[] = "Mouse";
$cart[] = "Keyboard";
echo "Cart items: " . count($cart) . "<br>";
echo "<ul>";

foreach ($cart as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

?>
