<?php

//    1051. Height Checker

function heightChecker($heights) {

    $expected = $heights;
    sort($expected);
    $count = 0;

    for ($i = 0; $i < count($heights); $i++){

        if ($heights[$i] != $expected[$i]) $count++;
    }

    return $count;
}

echo heightChecker([1,1,4,2,1,3]);