<?php

function maximumWealth($accounts) {

    $counter = 0;

    for ($i = 0; $i < count($accounts); $i++){

        $sum = 0;

        for ($j = 0; $j < count($accounts[$i]); $j++){
            $sum += $accounts[$i][$j];
        }

        $counter = $sum > $counter? $sum : $counter;
    }

    return $counter;
}

echo maximumWealth([[1,2,3],[3,2,1]]);