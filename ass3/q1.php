<?php
    $numbers = array(1, 2, 3);
    foreach ($numbers as $i) {
        foreach ($numbers as $j) {
            echo $i . $j;
            echo "</br>";
        }
    }
?>