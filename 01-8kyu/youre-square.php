<?php 

function isSquare($n){
    if (sqrt($n) === floor(sqrt($n))) {
      return true;
    }
    return false;
}

isSquare(5);
isSquare(9);