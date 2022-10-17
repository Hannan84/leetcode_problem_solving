<?php

//    1768. Merge Strings Alternately

function mergeAlternately($word1, $word2) {

    $len = max(strlen($word1),strlen($word2));

    $res = "";

    for ($i = 0; $i < $len; $i++){

        $res .= $word1[$i].$word2[$i];
    }

    return $res;
}

echo mergeAlternately("ab","pqrs");