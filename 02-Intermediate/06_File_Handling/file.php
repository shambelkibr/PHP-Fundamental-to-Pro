<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];

$fh=fopen("file.txt","a+");
if(!$fh){
    echo "Error in opening file";
}
else{
    fwrite($fh,$fname."\t".$lname."\t".$email."\n");
}
echo "<br>Data written to file successfully</br>";
fclose($fh);


?>
