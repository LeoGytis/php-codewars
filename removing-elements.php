<?php


echo '<pre>';
function removeEveryOther($array) {
    $newA = [];
    $size = count($array);
    for ($i = 0; $i < $size; $i +=2) {
        // array_splice($array, $i, 1);
        // unset($array[$i]);
        $newA[] = $array[$i];
    }
    // print_r($array);
    print_r($newA);

    // return $newA;
}



$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];  // 'out' => [1, 3, 5, 7, 9]
removeEveryOther($a);

$b = ["Keep", "Remove", "Keep", "Remove", "Keep"]; ///--> ["Keep", "Keep", "Keep", ...]
removeEveryOther($b);
