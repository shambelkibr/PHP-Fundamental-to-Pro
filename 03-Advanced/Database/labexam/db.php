<?php
$hostname = "127.0.0.1";
$username = "shanbelkibre";
$password = "Sha2025db@";

    $dbc = new mysqli($hostname, $username, $password);

    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    }

    $sql="CREATE DATABASE IF NOT EXISTS STUDENT";

    $resultdatbasecreste = $dbc->query($sql);

    if ($resultdatbasecreste==$true){
        echo " Database  is successfully created";
    }
    else{
        echo "Database create is failed :" . $dbc->error;
    }

    $dbc->select_db("STUDENT");

?>