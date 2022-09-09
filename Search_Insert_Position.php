<?php

//    35. Search Insert Position

function searchInsert($nums, $target) {

    $low = 0;
    $high = count($nums) - 1;


    while ($low <= $high){

        $mid = ceil(($low + $high)/2);

        if ($target == $nums[$mid]){
            return $mid;
        }
        elseif($target > $nums[$mid]){
            $low = $mid + 1;
        }
        elseif($target < $nums[$mid]){
            $high = $mid - 1;
        }
    }
    return $low;
}

echo searchInsert([1,3,4,6],5);