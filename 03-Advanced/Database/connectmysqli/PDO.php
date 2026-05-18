<?php

    $hostname = "127.0.0.1";      
    $username = "shanbelkibre";
    $password = "Sha2025db@";
    $database = "house_rental";  

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8mb4", $username, $password);
        echo "Connection successful!";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

?>