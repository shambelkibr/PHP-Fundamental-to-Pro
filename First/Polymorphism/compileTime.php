<?php

class Calculator{

        public function __call($name,$arguments){
            if($name=="multiply"){
                if (count($arguments)==2){
                    return $arguments[0]*$arguments[1];
                }
                elseif (count($arguments)==3){
                    return $arguments[0]*$arguments[1]*$arguments[2];
                }
                else{
                    return "Invalid number of arguments for multiplication.";
                }
            }

        }
}

$calc=new Calculator();
echo $calc->multiply(2,3);
echo "</br>";
echo $calc->multiply(2,3,4);
echo "</br>";
echo $calc->multiply(2,3,4,5);

?>