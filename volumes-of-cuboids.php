<?php

function findDifference($a, $b) {
    return abs(array_product($a) - array_product($b));
  }

// function findDifference($a, $b) {
//     $mulA = $a[0] * $a[1] * $a[2];
//     $mulB = $b[0] * $b[1] * $b[2];

//   if ($mulA > $mulB) {
//       return $mulA - $mulB;
//   } else
//   return $mulB - $mulA;
// }

echo findDifference([3, 2, 5], [1, 4, 4]);