<?php

//    2011. Final Value of Variable After Performing Operations

function finalValueAfterOperations($operations) {

    $X = 0;

    foreach($operations as $item){

        if ($item === "--X" or $item === "X--") $X--;
        if ($item === "++X" or $item === "X++") $X++;
    }

    return $X;
}

echo finalValueAfterOperations(["--X","X++","X++"]);