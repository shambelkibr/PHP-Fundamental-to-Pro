<?php

    $hostname = "127.0.0.1";
    $username = "shanbelkibre";
    $password = "Sha2025db@";

    try{
        $dbc =  new PDO ("mysql:host=$hostname;dbname=myDb", $username, $password);
        echo "successfully connected";

    }catch(PDOException $e){
        echo "error connecction is failed ", $e->getMessage();

    }


?>