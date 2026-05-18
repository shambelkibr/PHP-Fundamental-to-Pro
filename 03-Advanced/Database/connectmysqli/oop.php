<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $hostname = "127.0.0.1";    
    $username = "shanbelkibre";
    $password = "Sha2025db@";

    $dbc = new mysqli($hostname, $username, $password);

    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    }
    echo "Successfully connected<br>";


    $sql = "CREATE DATABASE IF NOT EXISTS MYDB_OOP";

    if ($dbc->query($sql) === true) {
        echo "Database created successfully<br>";
    } else {
        echo "Error: " . $dbc->error;
    }

    $dbc->select_db("MYDB_OOP");
  

    $sql = "CREATE TABLE IF NOT EXISTS MYGUEST (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        reg_Date TIMESTAMP
    )";


    if ($dbc->query($sql) === true) {
        echo "Table created successfully<br>";
    } 
    else {
        echo "Error creating table: " . $dbc->error;  
    }
    
// 1. Hash each password first
$hash1 = password_hash('Sha2025db@', PASSWORD_BCRYPT);
$hash2 = password_hash('Sha',        PASSWORD_BCRYPT);
$hash3 = password_hash('Sha',        PASSWORD_BCRYPT);
$hash4 = password_hash('Sha',        PASSWORD_BCRYPT);

// 2. Use the hashes in your INSERT statements
$sql  = "INSERT INTO MYGUEST (firstname, lastname, email, password) 
         VALUES ('shanbel', 'kibre', 'shan@gmail.com', '$hash1');";

$sql .= "INSERT INTO MYGUEST (firstname, lastname, email, password) 
         VALUES ('brtukan', 'kibre', 'shan1@gmail.com', '$hash2');";

$sql .= "INSERT INTO MYGUEST (firstname, lastname, email, password) 
         VALUES ('mekonn',  'kibre', 'shan2@gmail.com', '$hash3');";

$sql .= "INSERT INTO MYGUEST (firstname, lastname, email, password) 
         VALUES ('shanbel', 'kibre', 'shan3@gmail.com',   '$hash4');";


// 3. Run as before
if ($dbc->multi_query($sql)) {
    do {
        if ($res = $dbc->store_result()) {
            $res->free();
        }
    } while ($dbc->next_result());
    echo "All records inserted successfully<br>";
} else {
    echo "Error: " . $dbc->error;
}


    $sql = "SELECT * FROM MYGUEST";

    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: "       . $row["id"] . "<br>";
            echo "Name: "     . $row["firstname"] . " " . $row["lastname"] . "<br>";
            echo "Email: "    . $row["email"] . "<br>";
            echo "Password: " . $row["password"] . "<br>";
            echo "---<br>";
        }
    } else {
        echo "No records found<br>";
    }

    $dbc->close();
?>