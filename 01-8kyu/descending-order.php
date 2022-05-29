<?php

function descendingOrder(int $n) {
    $array = array_map('intval', str_split($n));
    arsort($array);
    $string = implode('', $array);
    echo $string;
    return intval($string);    
    var_dump($array);
}

descendingOrder(959532);