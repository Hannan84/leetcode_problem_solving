<?php

//    2089. Find Target Indices After Sorting Array


function targetIndices($nums, $target) {

    sort($nums);
    $indices = [];
    foreach($nums as $key => $num){

        if ($num == $target){
            $indices[] = $key;
        }
    }
    return $indices;
}

print_r(targetIndices([1,2,5,2,3],2));