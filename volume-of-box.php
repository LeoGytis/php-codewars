<?php

function getSize($width, $height, $depth) {
  $area = 2 * $width * $height + 2 * $height * $depth + 2 * $depth * $width;
  $volume = $width * $height * $depth;
  return [$area, $volume];
}