<?php

    //2309. Greatest English Letter in Upper and Lower Case

function greatestLetter($s) {

    $s = array_fill_keys(str_split($s), "");
    krsort($s);

    foreach ($s as $k => $v) {

        if (ctype_upper($k)) {
            break;
        }
        $su = strtoupper($k);
        if (isset($s[$su])) {
            return $su;
        }
    }
    return "";
}

echo greatestLetter("lEeTcOdE");