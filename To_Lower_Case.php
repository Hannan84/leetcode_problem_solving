<?php

function toLowerCase($s) {

    $arr = str_split($s);

    $res = '';

    foreach($arr as $chr) {

        $ord = ord($chr);
        if (64 < $ord && $ord < 91) {
            $res .= chr($ord + 32);
        } else {
            $res .= $chr;
        }
    }
    return $res;

}

echo toLowerCase("Hello");