<?php

//    682. Baseball Game


function calPoints($ops) {

    $record = [];

    for ($i = 0; $i < count($ops); $i++){

        if (is_numeric($ops[$i])){

            $record[] = $ops[$i];
        }

        if ($ops[$i] === "+"){

            $record [] = end($record) + prev($record);
//             $record [] = array_sum(array_slice($record,-2));
        }

        if ($ops[$i] === "D"){

            $record [] = end($record) * 2;
        }

        if ($ops[$i] === "C"){

            array_pop($record);
        }
    }
    return array_sum($record);
}

echo calPoints(["5","-2","4","C","D","9","+","+"]);