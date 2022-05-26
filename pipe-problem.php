<?php
function pipeFix($numbers) {
    $min = min($numbers);
    $max = max($numbers);
    $array = [];
    for ($i = $min; $i <= $max; $i++) {
        array_push($array, $i);
    }
    print_r($array);
    return $array;
}

pipeFix([1,2,3,12]);  //[1,2,3,4,5,6,7,8,9,10,11,12]
pipeFix([6,9]); //[6,7,8,9],
