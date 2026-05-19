<?php
$hostname = "127.0.0.1";
$username = "shanbelkibre";
$password = "Sha2025db@";

    $dbc = new mysqli($hostname, $username, $password);

    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    }


        // Create database
        $dbc->query("CREATE DATABASE IF NOT EXISTS db_cow");
        $dbc->select_db("db_cow");

        
        // Create student table
        $dbc->query("CREATE TABLE  IF NOT EXISTS tbl_disease (
        Cow_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        D_Name VARCHAR(100) NOT NULL,
        Symptoms VARCHAR(255) NOT NULL,
        Dignosis_Date TIMESTAMP NOT NULL,
        Treatment VARCHAR(255) NOT NULL,
        Store_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ");


  
?>

x