<?php

//        349. Intersection of Two Arrays

function intersection($nums1, $nums2) {

    $arr = [];

    foreach($nums1 as $value){

        if(in_array($value,$nums2) && !in_array($value,$arr)){

            $arr[] = $value;
        }
    }

    return $arr;
}

print_r(intersection([1,2,2,1],[2,2]));