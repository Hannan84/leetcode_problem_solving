<?php

function pivotIndex($nums) {

    $left_sum = 0;
    $right_sum = array_sum($nums);

    for ($i = 0; $i < count($nums); $i++){

        $right_sum -= $nums[$i];

        if ($left_sum == $right_sum){
            return $i;
        }

        $left_sum += $nums[$i];
    }

    return -1;
}

echo pivotIndex([2,1,-1]);