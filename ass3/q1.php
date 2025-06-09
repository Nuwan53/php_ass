<?php
    $numbers = array(1, 2, 3);
    foreach ($numbers as $i) 
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

    $mixed_numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    foreach ($mixed_numbers as $mixed) {
        if ($mixed % 2 == 0) {
            echo $mixed . " is even";
        } else {
            echo $mixed . " is odd";
        }
        echo "</br>";
    }
    $names = array("Alice", "Bob", "Charlie");
    foreach ($names as $name) {
        echo $name;
        echo "</br>";
    }
    $countries = array("USA", "Canada", "Mexico");
    foreach ($countries as $country) {
        echo $country;
        echo "</br>";
    }   
    $employees = array("john","jane","doe");
    foreach ($employees as $employee) {
        echo $employee;
        print_r($employee);
        echo "</br>";
    }



?>