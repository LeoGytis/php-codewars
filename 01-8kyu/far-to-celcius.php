<?php

function weatherInfo(int $temp): string
{
  $c = convertToCelsius($temp);
  if ($c >= 0) {
        return ($c . " is above freezing temperature");
    } else {
        return ($c . " is freezing temperature");
    }
}
    
function convertToCelsius(int $temperature) {
  $celsius = ($temperature - 32) * (5/9);
  if ($celsius < 0) return ceil($celsius);
  else return floor($celsius);
} 