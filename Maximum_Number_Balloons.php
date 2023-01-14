<?php

//    1189. Maximum Number of Balloons

function maxNumberOfBalloons($text) {

    $countText = array_count_values(str_split($text));
    $balloons = array_count_values(str_split("balloon"));

    $res = strlen($text);

    foreach ($balloons as $key => $balloon)
        $res = min($res,floor($countText[$key] / $balloons[$key]));
    return $res;
}

echo maxNumberOfBalloons("nlaebolko");