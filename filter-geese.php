<?php

function gooseFilter($birds) {
  $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    $newA = [];
    foreach ($birds as $value) {
        if (!in_array($value, $geese)) {
            $newA[] = $value;
        }
    }
    print_r($newA);
    return $newA;
}



gooseFilter(["Mallard", "Barbary", "Hook Bill", "Blue Swedish", "Crested"]);
 // ["Mallard", "Barbary", "Hook Bill", "Blue Swedish", "Crested"],

 gooseFilter(["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"]); //

