<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This page is Php page</title>
</head>
<body>
    <h1>Welcome to TechNova Company</h1>

    <?php
    // Declaring variables in PHP
    $name = "TechNova Company";
    $year = 2025;
    $price = 99.99;
    $isAvailable = true;

    $employees = ["john", "sara", "michaela", "hana"];
    $salary = [
        "john" => 50000,
        "sara" => 60000,
        "michaela" => 70000,
        "hana" => 90000,
        "country" => "Ethiopian"
    ];

    echo "Company Name: $name <br>";
    echo "Year: $year <br>";
    echo "Price: $price <br>";
    echo "Is Available: " . ($isAvailable ? "true" : "false") . "<br>";
    echo "Employees: " . implode(", ", $employees) . "<br>";
    echo "Salary Details: <br>";

    foreach ($salary as $key => $value) {
        echo "$key: $value <br>";
    }

    // Null data type in PHP
    $address = null;
    echo "Address: " . ($address ?? "N/A") . "<br>";
    ?>
</body>
</html>
