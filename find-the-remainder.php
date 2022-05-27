<?php

function remainder($a, $b) {
    if ($a > $b) { 
        if ($b == 0) return null;
        else return intval($a - floor($a / $b) * $b); 
    } 
    else { 
        if ($a == 0) return null;
        else return intval($b - floor($b / $a) * $a);
    }
  }

remainder(72, 13);


// if ($a == 0 || $b == 0) return null;

//ispresti su negatvyiais skaicias
