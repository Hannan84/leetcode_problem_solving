<?php


//        461. Hamming Distance

function hammingDistance($x, $y) {

    return strlen(str_replace('0','',decbin($x ^ $y)));
}

echo hammingDistance(1,4);