<?php

//    205. Isomorphic Strings


function isIsomorphic($s, $t) {

    $array = [];
    $str = '';

    for ($i=0; $i < strlen($s); $i++) {
        $array[$t[$i]] = $s[$i];
    }

    $array = array_unique($array);


    for ($i=0; $i < strlen($t); $i++) {
        $str .= $array[$t[$i]];
    }
    if ($str == $s) return true;
    return false;
}

echo isIsomorphic("egg","add");
