<?php

function singleNumber($nums) {

    $len = count($nums);

    $result = 0;

    for ($i = 0; $i < $len; $i++){

        // Implement bitwise XOR
        $result = $result ^ $nums[$i];
    }

    return $result;
}

echo singleNumber([2,2,1]);