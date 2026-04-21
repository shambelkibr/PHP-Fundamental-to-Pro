<?php

$hostname= "localhost ";
$username="shanbelkibre";
$password ="Shan2025db@";

$dbc=new mysqli($hostname, $username ,$password);
if($dbc->connect_error){
   die("connection is failed ". $dbc->connect_error);

}
echo "successufull connected";


?>