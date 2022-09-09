<?php

//    561. Array Partition


function arrayPairSum($nums) {

    $sum = 0;

    for ($i = 0; $i < count($nums); $i += 2){
        $sum += $nums[$i];
    }
    return $sum;
}

echo arrayPairSum([1,4,3,2]);