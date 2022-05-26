<?php

function arr(int $n = 0): array
{
  $array = [];
  if ($n === null || $n === 0) return $array;
     else {
  for ($i = 0; $i < $n; $i++){
    array_push($array, $i);
    }
  return $array;
  }
}