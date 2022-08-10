<?php

function romanToInt($s){

    $dictionary = Array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    );

    $result = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($dictionary[$s[$i]] < $dictionary[$s[$i + 1]]) {
            $result += $dictionary[$s[$i + 1]] - $dictionary[$s[$i]];
            $i++;
        }
        else {
            $result += $dictionary[$s[$i]];
        }
    }

    return $result;
}

echo romanToInt("MCMXCIV");