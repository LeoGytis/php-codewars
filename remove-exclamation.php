<?php

function remove(string $s) {
  $rez = substr($s, -1, 1) == '!' ? substr_replace($s ,"",-1) : $s;
  echo $rez;
}

remove("Hi! Hi!");