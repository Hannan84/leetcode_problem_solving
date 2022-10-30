<?php

//    2395. Find Subarrays With Equal Sum


function findSubarrays($nums) {

    $arr = [];

    for ($i = 1; $i < count($nums); $i++){
        $arr[] = $nums[$i] + $nums[$i-1];
    }

    return count(array_unique($arr)) !== count($nums) - 1;
}

echo findSubarrays([4,2,4]);