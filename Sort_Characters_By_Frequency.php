<?php

//    451. Sort Characters By Frequency

function frequencySort($s) {

    $s = array_count_values(str_split($s));
    arsort($s);
    $res = '';

    foreach($s as $key => $value){
        $res .= str_repeat($key,$value);
    }

    return $res;
}

echo frequencySort('tree');