<?php

function myPow($x, $n) {

    if ($n < 0){
        $x = 1/$x;
        $n = $n*(-1);
    }

    $sum = 1;

    while($n > 0){
        if ($n % 2 == 1){
            $sum *= $x;
        }
        $x *= $x;
        $n = $n >> 1;
    }return $sum;

}
echo myPow(2,2);