<?php

//    2057. Smallest Index With Equal Value


function smallestEqual($nums) {

    for ($i = 0; $i < count($nums); $i++){

        if ($i % 10 == $nums[$i]){
            return $i;
        }
    }
    return -1;
}

echo smallestEqual([4,3,2,1]);