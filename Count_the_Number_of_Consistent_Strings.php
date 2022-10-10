<?php

//    1684. Count the Number of Consistent Strings


function countConsistentStrings($allowed, $words) {

    $count = count($words);
    foreach ($words as $word) {
        for ($i = 0; $i < strlen($word); $i++) {
            $pos = strpos($allowed, $word[$i]);
            if ($pos === false) {
                $count--;
                break;
            }
        }
    }
    return $count;
}

echo countConsistentStrings("ab",["ad","bd","aaab","baa","badab"]);