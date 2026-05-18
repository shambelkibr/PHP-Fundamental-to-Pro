<?php
require 'db.php';

$pass1 = password_hash('seble',  PASSWORD_BCRYPT);
$pass2 = password_hash('kebede', PASSWORD_BCRYPT);

$dbc->query("INSERT IGNORE INTO users (username, password) 
             VALUES ('login1', '$pass1')");

$dbc->query("INSERT IGNORE INTO users (username, password) 
             VALUES ('login2', '$pass2')");

echo "Users inserted successfully!";
?>