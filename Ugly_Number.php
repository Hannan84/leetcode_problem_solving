<?php

//    263. Ugly Number


function isUgly($n) {

    if($n < 1 )  return false;

    while($n > 1){

        if ($n%2 == 0) $n /= 2;
        elseif ($n % 3 == 0) $n /= 3;
        elseif ($n % 5 == 0) $n /= 5;
        else return false;
    }
    return true;
}

echo isUgly(6);