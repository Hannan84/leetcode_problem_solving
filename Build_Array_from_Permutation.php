<?php

//    1920. Build Array from Permutation

function buildArray($nums) {

    $ans = [];

    foreach($nums as $num){
        $ans[] = $nums[$num];
    }
    return $ans;
}

print_r(buildArray([0,2,1,5,3,4]));