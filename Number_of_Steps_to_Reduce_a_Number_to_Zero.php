<?php

function numberOfSteps($num) {

    $count = 0;
    $i = 0;

    while ($i < $num){

        if ($num % 2 == 0){
            $num = $num/2;
        }
        else{
            $num = $num - 1;
        }

        $count++;
    }

    return $count;
}

echo numberOfSteps(14);