<?php
/**
 * Indexed Arrays in PHP
 */

echo "<h2>PHP Indexed Arrays</h2>";

// Creating indexed arrays
echo "<h3>1. Creating Arrays</h3>";
$fruits = array("Apple", "Banana", "Orange");
$colors = ["Red", "Green", "Blue"]; // Short syntax (PHP 5.4+)

echo "Fruits: " . implode(", ", $fruits) . "<br>";
echo "Colors: " . implode(", ", $colors) . "<br>";

// Accessing array elements
echo "<br><h3>2. Accessing Elements</h3>";
echo "First fruit: " . $fruits[0] . "<br>";
echo "Second fruit: " . $fruits[1] . "<br>";
echo "Third color: " . $colors[2] . "<br>";

// Modifying array elements
echo "<br><h3>3. Modifying Elements</h3>";
$numbers = [1, 2, 3, 4, 5];
echo "Original: " . implode(", ", $numbers) . "<br>";
$numbers[2] = 30;
echo "After modifying index 2: " . implode(", ", $numbers) . "<br>";

// Adding elements
echo "<br><h3>4. Adding Elements</h3>";
$animals = ["Dog", "Cat"];
echo "Original: " . implode(", ", $animals) . "<br>";
$animals[] = "Bird"; // Add to end
echo "After adding: " . implode(", ", $animals) . "<br>";
array_push($animals, "Fish", "Rabbit");
echo "After push: " . implode(", ", $animals) . "<br>";

// Removing elements
echo "<br><h3>5. Removing Elements</h3>";
$items = ["A", "B", "C", "D", "E"];
echo "Original: " . implode(", ", $items) . "<br>";
unset($items[2]);
echo "After unset(2): " . implode(", ", $items) . "<br>";
$last = array_pop($items);
echo "Popped: $last, Remaining: " . implode(", ", $items) . "<br>";

// Array length
echo "<br><h3>6. Array Length</h3>";
$days = ["Mon", "Tue", "Wed", "Thu", "Fri"];
echo "Number of days: " . count($days) . "<br>";

// Looping through arrays
echo "<br><h3>7. Looping Through Arrays</h3>";
$scores = [85, 92, 78, 95, 88];
foreach ($scores as $score) {
    echo "Score: $score<br>";
}

// Loop with index
echo "<br><h3>8. Loop with Index</h3>";
$cities = ["New York", "London", "Tokyo", "Paris"];
foreach ($cities as $index => $city) {
    echo "City $index: $city<br>";
}

// Checking if element exists
echo "<br><h3>9. Checking Elements</h3>";
$vegetables = ["Carrot", "Tomato", "Lettuce"];
if (in_array("Tomato", $vegetables)) {
    echo "Tomato is in the array<br>";
}
if (isset($vegetables[1])) {
    echo "Index 1 exists: " . $vegetables[1] . "<br>";
}

// Practical example
echo "<br><h3>10. Practical Example: Shopping Cart</h3>";
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
