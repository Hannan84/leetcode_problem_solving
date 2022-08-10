<?php

function isPowerOfTwo($n) {

    if ($n == 1){
        return true;
    }

    if ($n <= 0){
        return false;
    }

    $pow_2 = 2;

    while ($pow_2 < $n){
        $pow_2 *= 2;
    }
    return $pow_2 == $n;

}

echo isPowerOfTwo(3);