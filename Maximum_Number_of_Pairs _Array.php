<?php

function numberOfPairs($nums) {

    $num_counts = array_count_values($nums);
    print_r($num_counts);
    $pairs = 0;
    foreach($num_counts as $num => &$count){
        $pairs_of_num = floor($count / 2);
        $pairs += $pairs_of_num;

        $count -= ($pairs_of_num * 2);
    }
    return [
        $pairs,
        array_sum($num_counts),
    ];
}

print_r(numberOfPairs([1,3,2,1,3,2,2]));












