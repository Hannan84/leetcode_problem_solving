<?php

//    1528. Shuffle String


function restoreString($s, $indices) {

    $s = str_split($s);

    $combine = array_combine($indices,$s);
    ksort($combine);
    return implode($combine);
}

echo restoreString("codeleet",[4,5,6,7,0,2,1,3]);