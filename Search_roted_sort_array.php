<?php

function search($nums, $target) {

    $left = 0; $right = count($nums) - 1;

    while($left <= $right){
        $mid = ceil(($left + $right)/2);
        if ($nums[$mid] == $target){
            return $mid;
        }
        if($nums[$left] < $nums[$mid] and $target >= $nums[$left] and $target < $nums[$mid]){
            $right = $mid - 1;
        }
        elseif($nums[$mid] < $nums[$right] and $target <= $nums[$right] and $target > $nums[$mid]){
            $left = $mid + 1;
        }
        elseif($nums[$left] > $nums[$mid]){
            $right = $mid - 1;
        }
        else{
            $left = $mid + 1;
        }
    }return false;
}

echo search([4,5,6,7,0,1,2],0);