<?php
function flip($dir, $arr) {
    if ($dir === 'R') {
        sort($arr);
    }
    else rsort($arr);
    return $arr;
  }

flip('R', [3, 2, 1, 2]); // ([1, 2, 2, 3], 
flip('L', [1, 4, 5, 3, 5]); //  [5, 5, 4, 3, 1],