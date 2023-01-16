<?php

//    605. Can Place Flowers

function canPlaceFlowers($flowerbed, $n) {
    $step = 1;
    for($i = 0; $i < count($flowerbed); $i++) {
        if ($flowerbed[$i] == 0) $step++;
        if ($flowerbed[$i] == 1) $step = 0;
        if ($step == 3) {
            $n--;
            $step = 1;
        }
        if ($step == 2 && ($i == count($flowerbed) - 1)) {
            $n--;
        }
    }

    return (bool) ($n < 1);
}

echo canPlaceFlowers([1,0,0,0,1],1);













