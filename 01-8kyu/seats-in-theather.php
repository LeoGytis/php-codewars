<?php

function seatsInTheater($nCols, $nRows, $col, $row) {
  $rez = ($nCols - $col + 1) * ($nRows - $row);  
  return $rez;
}