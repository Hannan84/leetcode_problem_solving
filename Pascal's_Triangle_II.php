<?php

//    119. Pascal's Triangle II

function getRow($rowIndex) {

    $pascalTriangle = [[1]];

    for ($i = 1; $i <= $rowIndex; $i++){

        for ($j = 0; $j <= $i; $j++){

            $pascalTriangle[$i][$j] = $pascalTriangle[$i-1][$j-1] + $pascalTriangle[$i-1][$j];
        }
    }

    return $pascalTriangle[$rowIndex];
}

print_r(getRow(3));