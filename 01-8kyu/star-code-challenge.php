<?php

function strCount($str, $letter) {
  return substr_count($str, $letter);
}


strCount('Hello', 'o');   //1