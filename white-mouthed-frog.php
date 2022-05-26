<?php
function mouth_size($animal) {
  $a = explode(" ", $animal);
  print_r($a);
    foreach($a as $value) {
      if (strtolower($value) === 'alligator') return 'small';
      else return 'wide';
    }
}

mouth_size('ant bear');
mouth_size('alligator');