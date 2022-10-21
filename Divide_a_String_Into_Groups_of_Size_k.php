<?php

//    2138. Divide a String Into Groups of Size k

function divideString($s, $k, $fill) {

    $s_split = str_split($s,$k);

    $array = [];

    foreach ($s_split as $value){

        if (strlen($value) < $k){
            $array[] = str_pad($value,$k,$fill);
        }
        else{
            $array[] = $value;
        }
    }
    return $array;
}

print_r (divideString("abcdefghij",3,"x"));