<?php

function shortLongShort(string $s1, string $s2) {
    if (strlen($s1) < strlen($s2)) {
        return $s1 . $s2 . $s1;
    } else return $s2 . $s1 . $s2;
}