<?php

function highAndLow($numbers) {
    $maxmin = '';
    $max = -INF;
    $min = INF;
    $newA =  explode(' ', $numbers);
    print_r($newA);

    for ($i = 0; $i < count($newA); $i++) {
        if ($newA[$i] > $max) {
            $max = $newA[$i];
        }
        if ($newA[$i] < $min) {
            $min = $newA[$i];
        }
    }

    $maxmin = strval($max) . " " . strval($min);

    return $maxmin;
}


highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"); // 42 -9

// function highAndLow($numbers) {
//     $a = explode(' ', $numbers);
//     return max($a) . " " . min($a);
//   }