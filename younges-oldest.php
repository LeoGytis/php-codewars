<?php

function differenceInAges($ages) {
    $y = 500;
    $o = 0;
    for ($i = 0; $i < count($ages); $i++ ) {
        if ($o < $ages[$i]) $o = $ages[$i];
        if ($y > $ages[$i]) $y = $ages[$i];
    }
    echo $arr[] = [$y, $o, $o - $y];
}

differenceInAges([82, 15, 6, 38, 35]); // [6, 82, 76] 
differenceInAges([9, 15, 6, 86, 35]); //  9  /  86   / 77

