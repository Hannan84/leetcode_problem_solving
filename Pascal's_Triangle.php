<?php

//    118. Pascal's Triangle

function generate($numRows) {

    $pascalTriangle = [[1]];

    for ($i = 1; $i < $numRows; $i++){

        for($j = 0; $j <= $i; $j++){

            $pascalTriangle[$i][$j] = $pascalTriangle[$i-1][$j-1] + $pascalTriangle[$i-1][$j];
            }
    }
    return $pascalTriangle;
}

print_r(generate(5));