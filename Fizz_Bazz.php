<?php

function fizzBuzz($n) {

    $arr = [];

    for ($j = 1; $j <= $n; $j++){

        $disibleBy3 = $j % 3 == 0;
        $disibleBy5 = $j % 5 == 0;

        $str = "";

        if ($disibleBy3){
            $str .= "Fizz";
        }
        if ($disibleBy5){
            $str .="Buzz";
        }
        if (empty($str)){
            $str .= $j;
        }

        array_push($arr, $str);
    }

    return $arr;
}

echo fizzBuzz(3);