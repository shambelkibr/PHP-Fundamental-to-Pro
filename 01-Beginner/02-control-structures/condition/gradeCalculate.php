<?php

$grade=78;

if($grade>=90 and $grade<=100){
    echo "A+";
    }   
elseif($grade<90 && $grade>=80){
    echo "A";
    }   
elseif($grade<80 && $grade>=75){
    echo "B+";
    }
elseif($grade<75 && $grade>=70){
    echo "B";
}
elseif($grade<70 && $grade>=65){
    echo "C+";
    }
elseif($grade<65 && $grade>=60){
    echo "C";
    }
elseif($grade<60 && $grade>=55){
    echo "C-";
    }
elseif($grade<55 && $grade>=50){
    echo "D";
    }
elseif($grade<50 && $grade>=0){
    echo "F";
 }
else{
    echo "Invalid grade";
   }
?>