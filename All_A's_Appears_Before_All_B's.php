<?php

//    2124. Check if All A's Appears Before All B's


function checkString($s) {

    $sc = str_split($s);

    if (count(array_unique($sc)) == 1) return true;
    if (strrpos($s,'a') > strpos($s,'b')){
        return false;
    }return true;
}

echo checkString("aaabbb");