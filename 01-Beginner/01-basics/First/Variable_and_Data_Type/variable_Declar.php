<?php


$age=21;


function display_name(){

    $name="shanbel kibre";
    echo  "my name is {$name} ";

    // echo "I am {$age} years old"; not use becase it is global variable
    // but by using global key word use 
    global $age;
    print " and I am {$age} years old";

}
//  use static for value to remember each and ever time updated such us in loop concept 
Display_name();






?>