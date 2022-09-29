<?php

//    2399. Check Distances Between Same Letters


function checkDistances($s, $distance) {
    $map = array_flip(range('a', 'z'));
    $latters = str_split($s);
    while ($latters) {
        $l = end($latters);
        $start = array_search($l, $latters);
        unset($latters[$start]);
        $end = array_search($l, $latters);
        unset($latters[$end]);

        if ($distance[$map[$l]] != $end - $start - 1) {
            return false;
        }
    }

    return true;
}

echo checkDistances("abaccb",[1,3,0,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]);