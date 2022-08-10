<?php

function majorityElement($nums) {

    $result = null;
    $count = 0;

    foreach($nums as $num) {
        if ($count === 0) {
            $result = $num;
            $count = 1;
        }
        elseif ($num === $result) {
            $count++;
        }
        else {
            $count--;
        }

    }

    return $result;
}

echo majorityElement([3,2,3]);