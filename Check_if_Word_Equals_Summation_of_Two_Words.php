<?php

//    1880. Check if Word Equals Summation of Two Words

function isSumEqual($firstWord, $secondWord, $targetWord) {

    $maxLen = max(strlen($firstWord),strlen($secondWord),strlen($targetWord));
    $letters = array_flip(range('a','j'));

    $firstNum = '';
    $secondNum = '';
    $targetNum = '';

    for ($i = 0; $i < $maxLen; $i++){

        $firstNum .= $letters[$firstWord[$i]];
        $secondNum .= $letters[$secondWord[$i]];
        $targetNum .= $letters[$targetWord[$i]];
    }
    return intval($firstNum) + intval($secondNum) === intval($targetNum);
}

echo isSumEqual("acb","cba","cdb");