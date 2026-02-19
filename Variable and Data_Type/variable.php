<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This page is Php page</title>
</head>
<body>
    <h1>Welcome to DevSphere Company</h1>
</body>
</html>

 <?php
    // Declaring variables in PHP
    $name = "DevSphere Company";
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

    // Daynamic typing in PHP and checking the data type of a variable
    $variable="Hello, World!";
     var_dump($variable)."<br>";
     echo "Data type of variable: " . gettype($variable) . "<br>";
     echo "Dynamic Variable Value: $variable <br>";
     
    $variable=45;
     var_dump($variable)."<br>";
     echo "Data type of variable: " . gettype($variable) . "<br>";
     echo "Dynamic Variable Value : $variable <br>";

//  casting data types in PHP
    $number="100";
    $numberInt=(int)$number;
    echo "Original value: $number <br>";
    var_dump($number)."<br>";
    echo "Original data type: " . gettype($number) . "<br>";
    echo "Casted value: $numberInt <br>";
     var_dump($numberInt)."<br>";
    echo "Casted data type: " . gettype($numberInt) . "<br>";
    
    // Casting an Object to an Array in PHP
    class User {
    public $name = "Alice";
    public $age = 30;
    public $role = "Admin";
    }

    $userObject = new User();
    $userArray = (array) $userObject;

    print_r($userArray);

        /* Output:
        Array
        (
            [name] => Alice
            [age] => 30
            [role] => Admin
        )
            */

        // castin null to an array in PHP$emptyVar = null;
    $emptyVar = null;
    $arrayFromNull = (array) $emptyVar;

    print_r($arrayFromNull);
        /* Output:
        Array
        (
        )
        */

    // Casting a string
    $string = "Hello World";
    $arrayFromString = (array) $string;
    print_r($arrayFromString); 
            /* Output:
            Array
            (
                [0] => Hello World
            )
            */

            // Casting an integer
    $number = 42;
    $arrayFromNumber = (array) $number;
    print_r($arrayFromNumber);
            /* Output:
            Array
            (
                [0] => 42
            )
            */
    // Casting a boolean
    $boolean = true;
    $arrayFromBoolean = (array) $boolean;
    print_r($arrayFromBoolean);
            /* Output:
            Array
            (
                [0] => 1
            )
            */

    // Casting a float
    $float = 3.14;
    $arrayFromFloat = (array) $float;
    print_r($arrayFromFloat);
            /* Output:
            Array
            (
                [0] => 3.14
            )
            */
    // Casting an array to an object in PHP
    $array = [
        "name" => "Alice",
        "age" => 30,
        "role" => "Admin"
    ];
    $objectFromArray = (object) $array;
    print_r($objectFromArray);
            /* Output:
            stdClass Object
            (
                [name] => Alice
                [age] => 30
                [role] => Admin
            )
            */

    // Casting a string to an object
    $string = "Hello World";
    $objectFromString = (object) $string;
    print_r($objectFromString);
            /* Output:
            stdClass Object
            (
                [scalar] => Hello World
            )
            */
    // Casting an integer to an object
    $number = 42;
    $objectFromNumber = (object) $number;
    print_r($objectFromNumber);
            /* Output:
            stdClass Object
            (
                [scalar] => 42
            )
            */
    // Casting a boolean to an object
    $boolean = true;
    $objectFromBoolean = (object) $boolean;
    print_r($objectFromBoolean);
            /* Output:
            stdClass Object
            (
                [scalar] => 1
            )
            */
    // Casting a float to an object
    $float = 3.14;
    $objectFromFloat = (object) $float;
    print_r($objectFromFloat);
            /* Output:
            stdClass Object
            (
                [scalar] => 3.14
            )
            */

    
?>

