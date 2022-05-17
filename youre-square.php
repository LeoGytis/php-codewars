<?php 

function isSquare($n) {
    // echo sqrt($n);
    $m = sqrt($n);
    echo $m;
    if ($n < 2 || !is_int($m)) {
        echo 'false yra false';
        return false;
    } elseif (is_int($m)) {
        echo 'true yra true';
        return true; 
    }  
}


// echo is_int(3.5553);
isSquare(5);
isSquare(9);
// echo isSquare(2922221507690916025);