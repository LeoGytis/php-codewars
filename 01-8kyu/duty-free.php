<?php
function dutyFree($normPrice, $discount, $hol) {
        return floor($hol / ($normPrice * $discount / 100));
}