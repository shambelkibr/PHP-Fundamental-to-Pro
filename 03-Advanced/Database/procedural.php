<?php

$hostname = "127.0.0.1";
$username = "shanbelkibre";
$password = "Sha2025db@";

$dbc =  mysqli_connect($hostname, $username, $password);

if (!$dbc) {
    die("connection is failed " . $dbc->connect_error);
}

echo "successfully connected";

?>