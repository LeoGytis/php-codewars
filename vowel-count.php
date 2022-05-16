<?php
function getCount($str) {
     $vowelsCount = preg_match_all('/[aeiou]/i',$str,$matches); 
    echo $vowelsCount;
    return $vowelsCount;
}