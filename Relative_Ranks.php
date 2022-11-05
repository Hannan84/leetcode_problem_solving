<?php

//    506. Relative Ranks

function findRelativeRanks($score) {

    arsort($score);
    $rank = 1;
    foreach ($score as $index => $val) {

        if ($rank === 1) {
            $score[$index] = "Gold Medal";
        } else if ($rank === 2) {
            $score[$index] = "Silver Medal";
        } else if ($rank === 3) {
            $score[$index] = "Bronze Medal";
        } else {
            $score[$index] = intval($rank);
        }
        $rank++;
    }
    ksort($score);
    return $score;

}

print_r(findRelativeRanks([10,3,8,9,4]));