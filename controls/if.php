<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>

<form method="POST">
    Name: <input type="text" name="username">
    Age: <input type="number" name="age">
    <button type="submit">Submit</button>
</form>

<?php

if(isset($_POST["username"]) && isset($_POST["age"])){

    $name = $_POST["username"];
    $age = $_POST["age"];

    echo "Name: " . $name;
    echo "<br>";
    echo "Age: " . $age;
    echo "<br>";

    if($age >= 18){
        echo "You are eligible to vote";
    }
    else{
        echo "You are not eligible to vote";
    }

}

?>

</body>
</html>