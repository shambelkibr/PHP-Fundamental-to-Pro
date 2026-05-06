<?php

class Calculator1{

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

$calc=new Calculator1();
echo $calc->multiply(2,3);
echo "</br>";
echo $calc->multiply(2,3,4);
echo "</br>";
echo $calc->multiply(2,3,4,5);


echo "</br>";

class Calculator2 {
    // Method with default parameters
    public function add($a, $b = 0, $c = 10) {
        return $a + $b + $c;    }
}
$calc = new Calculator2();
// Calling the same method with different number of arguments
echo $calc->add(5) . "<br>";    // Output: 15  (adds only one number)
echo $calc->add(5, 10) . "<br>";    // Output: 25     (adds two numbers)
echo $calc->add(5, 10, 15) . "<br>";// Output: 30     (adds three numbers)


class Area{
        public function area($length,$width=null){
            if ($width==null){
                return $length*$length;
            }
            else{
                return $length*$width;
            }

        }
}

$area1=new Area();
echo "Area of square: ".$area1->area(5);

$area2=new Area();
echo "</br>Area of rectangle: ".$area2->area(5,10);

?>