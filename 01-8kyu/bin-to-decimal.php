<?php
echo '<pre>';

function binToDec2($bin) { // paprasta
    return bindec($bin);
  }

function binToDec($bin) {
    $arr = [];
    $newA = [];
    $numberLength = strlen($bin);
    $sum = 0;
    for ($i = 1; $i <= strlen($bin); $i++) {
        array_push($arr, substr($bin, -1 * $i, 1));
    }
    for ($j = 0; $j < count($arr); $j++) {
        array_push($newA, $arr[$j] * 2**$j );    
    }
    
    print_r($arr);
    print_r($newA);
    echo array_sum($newA);
    echo '<br>';
}




echo  binToDec("1001001"); // 73
echo  binToDec("110101010001001"); // 27273