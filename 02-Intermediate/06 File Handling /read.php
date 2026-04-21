<?php

// Step 1: Read the JSON file
$jsonData = file_get_contents("data.json");

// Step 2: Check if file was read successfully
if ($jsonData === false) {
    die("Error: Cannot read JSON file");
}

// Step 3: Decode JSON into PHP array
$dataArray = json_decode($jsonData, true);

// Step 4: Check if JSON is valid
if ($dataArray === null) {
    die("Error: Invalid JSON format");
}

// Step 5: Display data
echo "Name: " . $dataArray['name'] . "\n";
echo "Age: " . $dataArray['age'] . "\n";
echo "City: " . $dataArray['city'] . "\n";

?>