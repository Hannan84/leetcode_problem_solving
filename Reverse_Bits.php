<?php

//    190. Reverse Bits

function reverseBits($n) {

    $res = '';

    for ($i = 0; $i < 32; $i++){

        $res .= $n & 1;
        $n >>= 1;
    }
    return bindec($res);
}

echo reverseBits(43261596);