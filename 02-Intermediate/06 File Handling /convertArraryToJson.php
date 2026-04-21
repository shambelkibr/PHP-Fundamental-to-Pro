<?php

// Step 1: Create data
$data = [
    "employees" => [
        ["firstName" => "John", "lastName" => "Doe"],
        ["firstName" => "Anna", "lastName" => "Smith"],
        ["firstName" => "Peter", "lastName" => "Jones"]
    ]
];

// Step 2: Convert to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Step 3: Save to file
$result = file_put_contents("employees.json", $jsonData);

// Step 4: Check result
if ($result === false) {
    echo "Error writing file";
} else {
    echo "Data successfully written to employees.json\n";
}

?>