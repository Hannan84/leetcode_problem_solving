<?php

//    2243. Calculate Digit Sum of a String

function digitSum($s, $k) {

    if(strlen($s) <= $k) return $s;
    $digits = array_chunk(str_split($s),$k);

    $d = '';

    foreach($digits as $digit){

        $d .= array_sum($digit);
    }

    return digitSum($d, $k);
}

echo digitSum("11111222223",3);