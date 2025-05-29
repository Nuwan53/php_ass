<?php
    $numbers = array(1, 2, 3);
    foreach ($numbers as $i) {
        foreach ($numbers as $j) {
            echo $i . $j;
            echo "</br>";
        }
     $even_numbers = array(2,4,6,8);
     foreach ($even_numbers as $even) {
         echo $even;
         echo "</br>";
     }
        $odd_numbers = array(1,3,5,7,9);
        foreach ($odd_numbers as $odd) {
            echo $odd;
            echo "</br>"; 
    }
?>