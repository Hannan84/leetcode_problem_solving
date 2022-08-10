<?php

function addBinary($a,$b){

    $result = "";
    $sum_ = 0;

    $i = strlen($a)-1;
    $j = strlen($b)-1;

    while ($i >= 0 || $j >= 0 || $sum_ == 1){
        $sum_ += (($i >= 0)? ord($a[$i]) - ord('0'): 0);
        $sum_ += (($j >= 0)? ord($b[$j]) - ord('0'): 0);

        $result = chr($sum_% 2 + ord('0')).$result;
        echo $result;
        $sum_ = intval($sum_/2);

        $i--; $j--;
    }
    return $result;
}

echo addBinary(1101,100);