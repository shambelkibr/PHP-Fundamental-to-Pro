<?php
    $num_array = [1, 2, 34, "one", "two", false,true];
    foreach ($num_array as $num) {
        print($num . "<br>");
    }

   for ($i = 0; $i < count($num_array); $i++) {
             print($num_array[$i] . "<br>");
    }

?>
