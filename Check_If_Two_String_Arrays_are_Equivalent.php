<?php

//    1662. Check If Two String Arrays are Equivalent

function arrayStringsAreEqual($word1, $word2) {

    return implode($word1) === implode($word2)? true:false;
}

echo arrayStringsAreEqual(["ab", "c"],["a", "bc"]);