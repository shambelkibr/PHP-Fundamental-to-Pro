<?php
require 'db.php';
 
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$password  = password_hash($_POST['password'], PASSWORD_BCRYPT);
$department = $_post["department"];

 
$sql = "INSERT INTO student_table (firstname, lastname, email, password,department) 
        VALUES ('$firstname', '$lastname', '$email', '$password','$department')";
 
if ($dbc->query($sql)) {
    echo "Guest added successfully!<br>";
} else {
    echo "Error: " . $dbc->error . "<br>";
}
 
echo "<a href='insert_guest.html'>Go Back</a> | ";
echo "<a href='view_guests.php'>View Guests</a>";
?>
 