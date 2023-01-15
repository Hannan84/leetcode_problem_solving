<?php

//    347. Top K Frequent Elements

function topKFrequent($nums, $k) {

    $arr = array_count_values($nums);
    arsort($arr);
    return array_slice(array_keys($arr), 0, $k);

}
print_r(topKFrequent([1,1,1,2,2,3],2));