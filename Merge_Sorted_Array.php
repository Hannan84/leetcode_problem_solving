<?php

//    88. Merge Sorted Array


function merge($nums1, $m, $nums2, $n) {

    for($i = $m; $i < count($nums1); $i++)
    {
        $nums1[$i] = array_shift($nums2);
    }

    sort($nums1);
    return $nums1;
}

print_r(merge([1,2,3,0,0,0],3,[2,5,6],3));