<?php

function isPalindrome($s) {

    $s = strtolower($s);
    $s = preg_replace( '/[^a-z0-9]/i', '', $s);
    return $s == strrev($s);
}

echo isPalindrome("ab,a_");