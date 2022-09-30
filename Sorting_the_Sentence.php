<?php

//    1859. Sorting the Sentence


function sortSentence($s) {

    $result = [];
    $s = explode(' ', $s);

    foreach ($s as $w) {
        $result[substr($w, -1)] = substr($w, 0, strlen($w) - 1);
    }

    ksort($result);

    return implode(' ', $result);

}

echo sortSentence("is2 sentence4 This1 a3");