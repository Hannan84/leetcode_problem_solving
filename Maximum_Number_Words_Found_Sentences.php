<?php

//    2114. Maximum Number of Words Found in Sentences

function mostWordsFound($sentences) {

    $arrMax = [];
    foreach($sentences as $value){
        $arrMax[] = str_word_count($value);
    }
    return max($arrMax);
}

echo mostWordsFound(["alice and bob love leetcode", "i think so too", "this is great thanks very much"]);