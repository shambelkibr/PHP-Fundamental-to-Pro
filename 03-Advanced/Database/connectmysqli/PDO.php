<?php

    
    $hostname = $_ENV['DB_HOST'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];

    try{
        $dbc =  new PDO ("mysql:host=$hostname;dbname=myDb", $username, $password);
        echo "successfully connected";

    }catch(PDOException $e){
        echo "error connecction is failed ", $e->getMessage();

    }


?>