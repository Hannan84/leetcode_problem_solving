<?php

function mySqrt($x) {
    $low = 0;
    $high = $x;

    while($low <= $high){
        $mid = ceil(($low+$high)/2);
        if (($mid * $mid) <= $x and (($mid+1)*($mid+1)) > $x){
            return $mid;
        }
        elseif($mid*$mid > $x){
            $high = $mid - 1;
        }
        else{
            $low = $mid + 1;
        }
    }
}

echo mySqrt(9);