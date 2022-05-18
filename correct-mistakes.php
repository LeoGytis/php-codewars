<?php

function correct($string) {
  $patterns = array();
  $patterns[0] = '/0/';
  $patterns[1] = '/1/';
  $patterns[2] = '/5/';
  $replacements = array();
  $replacements[0] = 'O';
  $replacements[1] = 'I';
  $replacements[2] = 'S';
  $a = preg_replace($patterns, $replacements, $string);
  echo $a;
}

return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
return strtr($string, "015", "OIS");

correct("DUBL1N");
correct("51NGAP0RE");
correct("PAR15");
