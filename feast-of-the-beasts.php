<?php

function feast($beast, $dish){
   $pirmaRaide = substr($beast, 0, 1); 
   $paskutineRaide = substr($dish, -1, 1);
   if (substr($beast, 0, 1) === substr($dish, 0, 1) &&
       substr($beast, -1, 1) === substr($dish, -1, 1)) {
           return true;
    }
   else return false;
}

feast("great blue heron", "garlic naan");   // true