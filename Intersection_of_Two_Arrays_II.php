<?php

//    350. Intersection of Two Arrays II

function intersect($nums1, $nums2) {

    $arr = [];

    foreach($nums1 as $value){

        if (in_array($value,$nums2)){

            array_push($arr,$value);
            $key = array_search($value,$nums2);
            unset($nums2[$key]);
        }
    }
    return $arr;
}

print_r(intersect([1,2,2,1],[2,2]));