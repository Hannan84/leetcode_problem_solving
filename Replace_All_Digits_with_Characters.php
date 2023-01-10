<?php

//    1844. Replace All Digits with Characters

function replaceDigits($s) {

    for ($i = 1; $i < strlen($s); $i+=2){
        $s[$i] = chr(ord($s[$i-1]) + $s[$i]);
    }
    return $s;
}

echo replaceDigits("a1c1e1");