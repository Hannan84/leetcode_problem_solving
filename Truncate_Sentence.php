<?php

//    1816. Truncate Sentence


function truncateSentence($s, $k) {

    $arr_s = explode(" ",$s);

    $tranc = [];
    for ($i = 0; $i < $k; $i++){

        $tranc[] = $arr_s[$i];
    }

    return implode(' ',$tranc);
}

echo truncateSentence("Hello how are you Contestant",4);