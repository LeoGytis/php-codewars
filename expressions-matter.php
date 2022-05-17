<?php 

// 1 * (2 + 3) = 5
// 1 * 2 * 3 = 6
// 1 + 2 * 3 = 7
// (1 + 2) * 3 = 9

function expressionMatter($a, $b, $c) {
    $x = $a * ($b + $c);
    $y = $a * $b * $c;
    $z = $a + $b * $c;
    $v = ($a + $b) * $c;
    $f = $a + $b + $c;
    return max($x, $y, $z, $v, $f);
}

expressionMatter(2, 2, 4); //16
expressionMatter(1, 1, 1); // 3