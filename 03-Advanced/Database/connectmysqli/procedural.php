<?php


$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

$dbc =  mysqli_connect($hostname, $username, $password);

if (!$dbc) {
    die("connection is failed " . $dbc->connect_error);
}

echo "successfully connected";

?>