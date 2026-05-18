<?php
require 'db.php';

$username = $dbc->real_escape_string($_POST['username']);
$password = $_POST['password'];

// Step 1: Check if username exists
$sql    = "SELECT * FROM users WHERE username = '$username'";
$result = $dbc->query($sql);

if ($result->num_rows == 0) {
    echo "User not found!<br>";
    echo "<a href='../html/login.html'>Try Again</a>";

} else {
    $row = $result->fetch_assoc();

    // Step 2: Check if password matches
    if (password_verify($password, $row['password'])) {
        echo "Login successful! Welcome " . $row['username'] . "<br>";
    } else {
        echo "Wrong password!<br>";
        echo "<a href='../html/login.html'>Try Again</a>";
    }
}
?>