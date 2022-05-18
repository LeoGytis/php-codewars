<?php

function divisibleBy($numbers, $divisor) {
  for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % $divisor === 0) {
      $newA[] = $numbers[$i];
    }      
  }
  print_r($newA);
  echo '<br>';
  return $newA;
}

divisibleBy([1, 2, 3, 4, 5, 6], 3);  // 3 ir 6
divisibleBy([0, 1, 2, 3, 4, 5, 6], 4); /// 0 ir 4