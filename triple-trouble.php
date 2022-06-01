<?php

function triple_trouble(string $one, string $two, string $three) {
    $final = '';
   for ($i = 0; $i < strlen($one); $i++) {
        $final .= substr($one, $i, 1) . substr($two, $i, 1) . substr($three, $i, 1); 
   }

   return $final;
}

triple_trouble("Bm", "aa", "tn"); //"Batman"