<?php

//    1967. Number of Strings That Appear as Substrings in Word

function numOfStrings($patterns, $word) {

    $count = 0;
    foreach($patterns as $pattern){

        if (str_contains($word,$pattern)) $count++;
    }
    return $count;
}

echo numOfStrings(["a","abc","bc","d"],"abc");