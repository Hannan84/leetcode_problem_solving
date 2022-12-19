<?php

//    1929. Concatenation of Array


function getConcatenation($nums) {

    $len = count($nums);

    for ($i = 0; $i < $len; $i++){
        $nums[$len+$i] = $nums[$i];
    }
    return $nums;
}

echo getConcatenation([1,2,1]);










