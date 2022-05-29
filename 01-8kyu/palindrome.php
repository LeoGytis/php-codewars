<?php

function is_palindrome($line) {
    if (gettype($line === 'integer')) {
        $newString = strval($line);
        return $newString === strrev($newString);
    }
    else return $line === strrev($line);
}