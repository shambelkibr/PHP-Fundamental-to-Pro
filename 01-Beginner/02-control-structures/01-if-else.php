<?php
/**
 * If...Else Statements
 * 
 * Conditional statements allow you to execute different code based on conditions.
 */

echo "<h2>If...Else Statements</h2>";

// Simple if statement
echo "<h3>1. Simple If Statement</h3>";
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br>";
}

// If...else statement
echo "<br><h3>2. If...Else Statement</h3>";
$temperature = 25;
if ($temperature > 30) {
    echo "It's hot outside!<br>";
} else {
    echo "The weather is pleasant.<br>";
}

// If...elseif...else statement
echo "<br><h3>3. If...Elseif...Else Statement</h3>";
$score = 75;
if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
echo "Score: $score, Grade: $grade<br>";

// Nested if statements
echo "<br><h3>4. Nested If Statements</h3>";
$isLoggedIn = true;
$isAdmin = false;

if ($isLoggedIn) {
    echo "User is logged in.<br>";
    if ($isAdmin) {
        echo "User has admin privileges.<br>";
    } else {
        echo "User has regular privileges.<br>";
    }
} else {
    echo "Please log in.<br>";
}

// Ternary operator
echo "<br><h3>5. Ternary Operator</h3>";
$age = 20;
$canVote = ($age >= 18) ? "Yes" : "No";
echo "Age: $age, Can vote: $canVote<br>";

// Nested ternary (use with caution)
$num = 0;
$result = ($num > 0) ? "positive" : (($num < 0) ? "negative" : "zero");
echo "Number $num is $result<br>";

// Null coalescing operator (PHP 7+)
echo "<br><h3>6. Null Coalescing Operator</h3>";
$username = null;
$display = $username ?? "Guest";
echo "Username: $display<br>";

// Spaceship operator with if (PHP 7+)
echo "<br><h3>7. Spaceship Operator</h3>";
$a = 5;
$b = 10;
$comparison = $a <=> $b;
if ($comparison < 0) {
    echo "$a is less than $b<br>";
} elseif ($comparison > 0) {
    echo "$a is greater than $b<br>";
} else {
    echo "$a is equal to $b<br>";
}

// Practical example: User authentication
echo "<br><h3>8. Practical Example: Login System</h3>";
$username = "admin";
$password = "secret123";
$inputUser = "admin";
$inputPass = "secret123";

if ($inputUser === $username && $inputPass === $password) {
    echo "✓ Login successful! Welcome, $username.<br>";
} else {
    if ($inputUser !== $username) {
        echo "✗ Invalid username.<br>";
    }
    if ($inputPass !== $password) {
        echo "✗ Invalid password.<br>";
    }
}

// Multiple conditions
echo "<br><h3>9. Multiple Conditions</h3>";
$age = 25;
$hasLicense = true;
$hasCar = true;

if ($age >= 18 && $hasLicense) {
    echo "You can drive.<br>";
    if ($hasCar) {
        echo "You can drive your own car.<br>";
    } else {
        echo "You need to rent or borrow a car.<br>";
    }
} else {
    echo "You cannot drive yet.<br>";
}

?>
