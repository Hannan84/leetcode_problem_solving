<?php

//448. Find All Numbers Disappeared in an Array
//
//Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all the integers in the range [1, n] that do not appear in nums.
//
//
//
//Example 1:
//
//Input: nums = [4,3,2,7,8,2,3,1]
//Output: [5,6]
//Example 2:
//
//Input: nums = [1,1]
//Output: [2]



//Solution of the problem

function findDisappearedNumbers($nums) {

    $result = [];
    $count = count($nums);
    $nums = array_count_values($nums);
    for($i=1; $i<=$count; $i++){
        if(!isset($nums[$i]))   $result[] = $i;
    }

    return $result;
}

print json_encode(findDisappearedNumbers([4,3,2,7,8,2,3,1]));