<?php
require 'oop_Disease.php';

$d = new Disease();

echo "<h2>OOP TEST</h2>";

// CREATE
echo "Create: " . $d->create(200, "Test Disease", "Fever", "2026-05-19 10:00:00", "Medicine", "2026-05-19 11:00:00") . "<br> <hr>";

// READ
echo "<h3>Records</h3>";

$result = $d->getAll();

while ($row = $result->fetch_assoc()) {
    echo $row['Cow_id'] . " --- " .
         $row['D_Name'] . " ---" .
         $row['Symptoms'] . " --- " .
         $row['Dignosis_Date'] . " ---" .
         $row['Treatment'] . " --- " .
         $row['Store_DATE'] . "<br>";
}

echo "<hr>";
// UPDATE
echo "Update: " . $d->update(200, "Updated", "Cough", "2026-05-19 12:00:00", "New Med", "2026-05-19 12:30:00") . "<br><hr>";

// DELETE
echo "Delete: " . $d->delete(200) . "<br>";
?>