<?php
$hostname = "127.0.0.1";
$username = "shanbelkibre";
$password = "Sha2025db@";

    $dbc = new mysqli($hostname, $username, $password);

    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    }


    // Create database
    $dbc->query("CREATE DATABASE IF NOT EXISTS LAB_EXAM");
    $dbc->select_db("LAB_EXAM");

    
    // Create student table
    $dbc->query("CREATE TABLE IF NOT EXISTS student (
        student_id   INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        student_name VARCHAR(100) NOT NULL,
        email        VARCHAR(100) NOT NULL UNIQUE,
        phone        VARCHAR(20)  NOT NULL,
        department   VARCHAR(100) NOT NULL,
        year         YEAR         NOT NULL
    )");


    // Create project table
    $dbc->query("CREATE TABLE IF NOT EXISTS project (
        project_code VARCHAR(20)  PRIMARY KEY,
        project_name VARCHAR(100) NOT NULL,
        student_id   INT UNSIGNED,
        hourly_rate  DATETIME     NOT NULL,
        FOREIGN KEY (student_id) REFERENCES student(student_id)
    )");

?>