<?php

function reverseString($s) {
    $len = count($s);

    $i = 0;
    $j = $len-1;

    while ($i < $j){

        $temp = $s[$i];

        $s[$i] = $s[$j];
        $s[$j] = $temp;

        $i = $i + 1;
        $j = $j - 1;
    }

    return $s;
}

print json_encode(reverseString(["h","e","l","l","o"]));