<?php

function maxSubArray($nums) {
    $max_sum = $nums[0];

    $sum = $nums[0];
    for($i = 1; $i < count($nums); $i++){
        $sum += $nums[$i];
        if($sum < $nums[$i]){
            $sum = $nums[$i];
        }
        if ($sum > $max_sum){
            $max_sum = $sum;
        }
    }
    return $max_sum."<br>";
}

echo maxSubArray([-2,1,-3,4,-1,2,1]);
echo maxSubArray([1]);
echo maxSubArray([5,4,-1,7,8]);