<?php


//    1512. Number of Good Pairs

function numIdenticalPairs($nums) {
    $pairs = [];
    for ($i = 0; $i < count($nums); $i++) {
        $pairs[$nums[$i]]++;
    }
    $sum = 0;
    foreach($pairs as $value) {
        if ($value > 1) {
            $sum += ($value * ($value - 1))/2;
        }
    }
    return $sum;
}

echo numIdenticalPairs([1,2,3,1,1,3]);