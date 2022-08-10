<?php


function maximumGap($a){

    $max_gap = 0;

    for	($i = 0; $i < count($a); $i++){
        for	($j = 1; $j < count($a); $j++){
            if	($a[$i] <= $a[$j]){
                if ($j - $i > $max_gap){
                    $max_gap = $j - $i;
                }
            }
        }
    }
    return $max_gap;
}

echo maximumGap([1, 8,2]);