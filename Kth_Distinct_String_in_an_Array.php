<?php

//    2053. Kth Distinct String in an Array



function kthDistinct($arr, $k) {

    $distinct = array_count_values($arr);

    $arr = array_keys($distinct,1);

    if (count($arr) < $k){
        return "";
    }
    return $arr[$k-1];
}

echo kthDistinct(["d","b","c","b","c","a"],2);