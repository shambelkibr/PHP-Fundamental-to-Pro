<?php
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $mail=$_POST["email"];
    $fh= fopen("guest.txt", "w+");

    if (!$fh){
        echo "the info is not saved, the file doesn't exists";
    }
    else {
        fwrite($fh, $fname."\t".$lname."\t".$mail."\t");
        echo "<br />"; echo "your data is Saved!!"."<br/>"; fclose($fh);
    } 

?>