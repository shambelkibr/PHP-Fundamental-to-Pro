<?php

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

$dbc = new mysqli($hostname, $username, $password);

if ($dbc->connect_error) {
    die("connection is failed " . $dbc->connect_error);
}

echo "successfully connected";

?>