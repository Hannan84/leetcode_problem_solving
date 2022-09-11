<?php

//    121. Best Time to Buy and Sell Stock


function maxProfit($prices) {

    $min = $prices[0];
    $maxProfit = 0;
    for ($i = 1; $i < count($prices); $i++) {
        if ($min > $prices[$i]) {
            $min = $prices[$i];
        }

        if ($maxProfit < ($prices[$i] - $min)) {
            $maxProfit = $prices[$i] - $min;
        }
    }
    return $maxProfit;
}

echo maxProfit([7,1,5,3,6,4]);