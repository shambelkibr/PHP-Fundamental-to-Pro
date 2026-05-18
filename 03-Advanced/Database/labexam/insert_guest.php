<?php
require 'db.php';

$firstname  = $dbc->real_escape_string($_POST['firstname']);
$lastname   = $dbc->real_escape_string($_POST['lastname']);
$email      = $dbc->real_escape_string($_POST['email']);
$password   = password_hash($_POST['password'], PASSWORD_BCRYPT);
$department = $dbc->real_escape_string($_POST['department']);

$sql = "INSERT INTO student_table (firstname, lastname, email, password, department) 
        VALUES ('$firstname', '$lastname', '$email', '$password', '$department')";

if ($dbc->query($sql)) {
    echo "Student added successfully!<br>";
} else {
    echo "Error: " . $dbc->error . "<br>";
}

echo "<a href='insert_guest.html'>Go Back</a> | ";
echo "<a href='view_guests.php'>View Guests</a>";
?>