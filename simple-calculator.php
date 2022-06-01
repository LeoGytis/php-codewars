<?php

function calculator($a, $b, $sign) {
  if (gettype($a) === 'integer' && gettype($b) === 'integer') {
    if ($sign == '+') return $a + $b;
    else if ($sign == '-') return $a - $b;
    else if ($sign == '*') return $a * $b;
    else if ($sign == '/') return $a / $b;
    else if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $sign)) return 'unknown value';
  }
  else return 'unknown value';
}