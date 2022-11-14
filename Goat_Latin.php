<?php

//    824. Goat Latin

function toGoatLatin($S) {
    $a = '';
    $sArr = explode(' ', $S);
    foreach ($sArr as &$word) {
        if(!in_array(strtolower($word[0]), ['a', 'e', 'i', 'o', 'u'])) {
            $word = substr($word, 1) . $word[0];
        }

        $a .= 'a';
        $word .= 'ma';
        $word .= $a;
    }

    return implode(' ', $sArr);
}

echo toGoatLatin("I speak Goat Latin");