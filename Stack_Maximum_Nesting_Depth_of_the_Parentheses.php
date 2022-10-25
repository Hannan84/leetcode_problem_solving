<?php

//    1614. Maximum Nesting Depth of the Parentheses


function maxDepth($s) {

    $maxDep = 0;
    $count = 0;

    for ($i = 0; $i < strlen($s); $i++){

        if ($s[$i] == "(") $count++;
        if ($s[$i] == ")") $count--;
        if ($count > $maxDep) $maxDep = $count;
    }

    return $maxDep;
}

echo maxDepth("(1+(2*3)+((8)/4))+1");
