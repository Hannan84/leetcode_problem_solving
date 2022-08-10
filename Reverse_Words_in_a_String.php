<?php

function reverseWords($s) {

    $s = trim($s);
    $s = preg_replace('/\s+/',' ',$s);

    $s = explode(" ",$s);

    return implode(" ",array_reverse($s));

}

print_r(reverseWords("the sky is blue"));