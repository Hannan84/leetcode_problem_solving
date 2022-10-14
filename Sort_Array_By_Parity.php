<?php

//    905. Sort Array By Parity


function sortArrayByParity($nums) {

    foreach($nums as $key => $num){

        if ($num%2 !== 0){
            unset($nums[$key]);
            $nums[] = $num;
        }
    }
    return $nums;
}

print_r(sortArrayByParity([3,1,2,4]));