<?php

function titleToNumber($titleNumber){

    $result = 0;

    for ($i = 0; $i < strlen($titleNumber); $i++){

        $result *= 26;
        $result += ord($titleNumber[$i]) - ord('A') + 1;
    }

    return $result;
}

echo titleToNumber("AB");