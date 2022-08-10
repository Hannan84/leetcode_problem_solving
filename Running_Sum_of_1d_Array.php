<?php

function runningSum($nums) {

    $n = count($nums);

    for ($i = 1; $i < $n; $i++){
        $nums[$i] = $nums[$i] + $nums[$i - 1];
    }

    return $nums;
}

print json_encode(runningSum([1,2,3,4]));