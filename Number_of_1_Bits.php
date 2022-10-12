<?php

//    191. Number of 1 Bits

function hammingWeight($n) {

    return strlen(str_replace(0,'',decbin($n)));
}

echo hammingWeight(00000000000000000000000000001011);