<?php

function twoSort($s) {
    sort($s);
    print_r($s);
    echo '<br>';
    $ats = $s[0];
    $result = '';
    for ($i = 0;  $i < strlen($ats); $i++) {
        $result .= $ats[$i] . '***';
    }
    echo $result;
    return rtrim($result, "***"); // nukerpa paskutinius simbolius
}

function twoSort2222($s) {
    asort($s);
    return implode('***', str_split(array_shift($s)));
}

// twoSort(["bitcoin", "take", "over", "the", "world", "maybe", "who", "knows", "perhaps"]); // ('b***i***t***c***o***i***n')
// twoSort(["Lets", "all", "go", "on", "holiday", "somewhere", "very", "cold"]); 
twoSort(["i", "want", "to", "travel", "the", "world", "writing", "code", "one", "day"]);