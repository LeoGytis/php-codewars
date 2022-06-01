<?php

function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin) {
    if ($dolphin == true) {
        if ($pontoonDistance / $youSpeed < $sharkDistance / $sharkSpeed * 2)  return 'Alive!';
        else return 'Shark Bait!';
    }
    else if ($pontoonDistance / $youSpeed < $sharkDistance / $sharkSpeed) {
        return 'Alive!';
    } else return 'Shark Bait!';
  }

shark(12, 50, 4, 8, true); //   "Alive!", 