<?php

function plusOne($digits) {

    $n = count($digits);

    for($i=$n-1; $i>=0; $i--) {

        if($digits[$i] < 9) {

            $digits[$i]++;
            return $digits;

        }

        $digits[$i] = 0;

    }

    if ($digits[0] == 0) {
        array_unshift($digits, 1);
    }

    return $digits;

}

print_r(plusOne([8]));