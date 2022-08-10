<?php

function reverseWords($s) {

    $s = str_split($s);

    $s = implode(array_reverse($s));
    $s = explode(" ",$s);

    return implode(" ",array_reverse($s));
}

echo reverseWords("the sky is blue");