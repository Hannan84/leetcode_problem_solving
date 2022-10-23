<?php

//    696. Count Binary Substrings


function countBinarySubstrings($s) {

    $prevRunLength = 0;
    $curRunLenth = 1;
    $res = 0;

    for ($i = 1; $i < strlen($s); $i++){

        if ($s[$i] == $s[$i-1]){
            $curRunLenth++;
        }
        else{
            $prevRunLength = $curRunLenth;
            $curRunLenth = 1;
        }
        if ($prevRunLength >= $curRunLenth){
            $res++;
        }
    }
    return $res;
}

echo countBinarySubstrings("00110011");














