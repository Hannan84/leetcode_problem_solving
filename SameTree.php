<?php

function isSameTree($p,$q){
    $arr1 = array_diff($p);
    $arr2 = array_diff($q);
    if ($arr1 == $arr2){
        return 'true';
    }return 'false';
}

print_r(isSameTree([1,2,1],[1,1,2]));