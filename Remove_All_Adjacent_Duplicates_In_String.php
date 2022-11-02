<?php

//    1047. Remove All Adjacent Duplicates In String

function removeDuplicates($s) {

    $res = [];
    for ($i=0; $i<strlen($s); $i++) {
        if (end($res) == $s[$i])
            array_pop($res);
        else
            array_push($res, $s[$i]);
    }
    return join($res);

}

echo removeDuplicates("abbaca");