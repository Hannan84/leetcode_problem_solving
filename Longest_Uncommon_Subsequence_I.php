<?php

//    521. Longest Uncommon Subsequence I


function findLUSlength($a, $b) {


    if ($a === $b){
        return -1;
    }

    return strlen($a) > strlen($b)? strlen($a):strlen($b);
}


echo findLUSlength('aca','cdc');