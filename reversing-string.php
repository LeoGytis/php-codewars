<?php

function reverse($string) {
   echo preg_match_all('~[\w-]+~',$string,$matches);
}

reverse("Hello World"); // "World Hello",