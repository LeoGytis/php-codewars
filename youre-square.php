<?php 

function isSquare($n) {
    // echo sqrt($n);
    $m = sqrt($n);
    echo $m;
    if ($n < 2 || !is_int($m)) {
        echo 'false yra false <br>';
        return false;
    } else {
        echo 'true yra true <br>';
        return true; 
    }  
}

function arInt($n) {
    if (is_int($n)) {
        echo "NE INT";
    } else echo 'Integer';
}

// arInt(3.5553);
// echo is_int(3.5553);

isSquare(5);
isSquare(9);
// echo isSquare(2922221507690916025);