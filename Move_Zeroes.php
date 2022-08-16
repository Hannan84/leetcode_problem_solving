<?php

//        283. Move Zeroes


function moveZeroes($nums) {

    $pos = 0;

    for ($i = 0; $i < count($nums); $i++){

        if ($nums[$i]){

            $temp = $nums[$pos];
            $nums[$pos] = $nums[$i];
            $nums[$i] = $temp;

            $pos++;
        }
    }

    return $nums;
}

print json_encode(moveZeroes([0,1,0,3,12]));