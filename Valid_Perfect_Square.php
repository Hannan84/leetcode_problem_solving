<?php


    //367. Valid Perfect Square

function isPerfectSquare($num) {

    $left = 1; $right = $num;

    while ($left <= $right){
        $mid = floor(($left + $right)/2);
        if ($mid * $mid == $num)
            return true;
        elseif ($mid * $mid > $num)
            $right = $mid - 1;
        else
            $left = $mid + 1;
    }
    return false;
}

echo isPerfectSquare(16);