<?php

function minBitFlips($start, $goal) {

    return array_sum(str_split(decbin($start ^ $goal)));

}

echo minBitFlips(10,7);