<?php

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV[''];

$dbc = mysqli_connect("$hostname", "$username", "$password", "$dbname") or die("connection is failed");




?>