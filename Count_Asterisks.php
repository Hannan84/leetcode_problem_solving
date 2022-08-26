<?php

//    2315. Count Asterisks

function countAsterisks($s) {

    $isActive = false;

    $count = 0;

    for ($i = 0; $i < strlen($s); $i++){

        if ($s[$i] == '*' && $isActive == false){

            $count++;
        }
        if($s[$i] == '|'){

            $isActive = !$isActive;

        }
    }
    return $count;
}

echo countAsterisks("l|*e*et|c**o|*de|");