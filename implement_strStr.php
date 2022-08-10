<?php


function implement_strStr($haystack, $needle) {
    $len_h = strlen($haystack);
    $len_n = strlen($needle);

    if($len_n == 0){
        return 0;
    }

    for ($i = 0; $i < $len_h - $len_n + 1; $i++){
        if((substr($haystack,$i,$len_n)) == $needle){
            return $i;
        }
    }
    return -1;
}

echo implement_strStr("hello","ll");