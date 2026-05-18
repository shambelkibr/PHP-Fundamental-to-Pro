<?php
$hostname = "127.0.0.1";
$username = "shanbelkibre";
$password = "Sha2025db@";

$dbc = new mysqli($hostname, $username, $password);

if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}
echo "successfully connected <br> <br>";


//  create Database
$sql = "CREATE DATABASE IF NOT EXISTS STUDENT";
$result = $dbc->query($sql);

if ($result == true) {
    echo "Database created successfully<br><br>";
} else {
    echo "Database create failed: " . $dbc->error;
}



// create table
$dbc->select_db("STUDENT");

$sql = "CREATE TABLE IF NOT EXISTS student_table(
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname  VARCHAR(50)  NOT NULL,
    lastname   VARCHAR(50)  NOT NULL,
    email      VARCHAR(100) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL
)";

$result = $dbc->query($sql);

if ($result == true) {
    echo "Student table created successfully<br><br>";
} else {
    echo "Student table create failed: " . $dbc->error;
}
?>