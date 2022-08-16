<?php

//    338. Counting Bits

function countBits($n) {


    for ($i = 0; $i <= $n; $i++){

        $arr [] = substr_count(decbin($i),1);
    }

    return $arr;
}

print_r(countBits(5));