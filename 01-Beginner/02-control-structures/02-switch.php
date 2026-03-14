<?php
/**
 * Switch Statement
 * 
 * The switch statement is used to perform different actions based on different conditions.
 * It's an alternative to long if...elseif...else chains.
 */

echo "<h2>Switch Statement</h2>";

// Basic switch statement
echo "<h3>1. Basic Switch</h3>";
$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    case 4:
        echo "Thursday<br>";
        break;
    case 5:
        echo "Friday<br>";
        break;
    case 6:
        echo "Saturday<br>";
        break;
    case 7:
        echo "Sunday<br>";
        break;
    default:
        echo "Invalid day<br>";
}

// Switch with string
echo "<br><h3>2. Switch with String</h3>";
$fruit = "apple";
switch ($fruit) {
    case "apple":
        echo "Selected fruit is apple (red/green)<br>";
        break;
    case "banana":
        echo "Selected fruit is banana (yellow)<br>";
        break;
    case "orange":
        echo "Selected fruit is orange (orange color)<br>";
        break;
    default:
        echo "Unknown fruit<br>";
}

// Switch without break (fall-through)
echo "<br><h3>3. Switch Fall-through</h3>";
$month = 2;
switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "This month has 31 days<br>";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "This month has 30 days<br>";
        break;
    case 2:
        echo "This month has 28 or 29 days<br>";
        break;
    default:
        echo "Invalid month<br>";
}

// Multiple operations in case
echo "<br><h3>4. Multiple Operations</h3>";
$grade = "B";
switch ($grade) {
    case "A":
        echo "Excellent!<br>";
        $points = 4.0;
        break;
    case "B":
        echo "Good job!<br>";
        $points = 3.0;
        break;
    case "C":
        echo "Satisfactory<br>";
        $points = 2.0;
        break;
    case "D":
        echo "Needs improvement<br>";
        $points = 1.0;
        break;
    case "F":
        echo "Failed<br>";
        $points = 0.0;
        break;
    default:
        echo "Invalid grade<br>";
        $points = 0.0;
}
echo "Grade points: $points<br>";

// Practical example: Menu system
echo "<br><h3>5. Practical Example: Menu System</h3>";
$choice = 2;
echo "Menu:<br>";
echo "1. View Profile<br>";
echo "2. Edit Profile<br>";
echo "3. Change Password<br>";
echo "4. Logout<br>";
echo "<br>Your choice: $choice<br>";

switch ($choice) {
    case 1:
        echo "→ Displaying user profile...<br>";
        break;
    case 2:
        echo "→ Opening profile editor...<br>";
        break;
    case 3:
        echo "→ Password change form loaded...<br>";
        break;
    case 4:
        echo "→ Logging out...<br>";
        break;
    default:
        echo "→ Invalid choice. Please try again.<br>";
}

// Alternative syntax
echo "<br><h3>6. Alternative Syntax</h3>";
$color = "red";
switch ($color):
    case "red":
        echo "Stop!<br>";
        break;
    case "yellow":
        echo "Caution<br>";
        break;
    case "green":
        echo "Go!<br>";
        break;
    default:
        echo "Invalid signal<br>";
endswitch;

// Switch vs If...Elseif
echo "<br><h3>7. When to Use Switch vs If</h3>";
echo "<strong>Use Switch when:</strong><br>";
echo "- Testing the same variable against multiple values<br>";
echo "- Values are discrete (specific values, not ranges)<br>";
echo "- Makes code more readable<br>";
echo "<br><strong>Use If...Elseif when:</strong><br>";
echo "- Testing different conditions<br>";
echo "- Using ranges or complex expressions<br>";
echo "- Testing different variables<br>";

?>
