<?php

//    2224. Minimum Number of Operations to Convert Time



function convertTime($current, $correct) {

    $result = 0;
    $steps = [60, 15, 5, 1];

    $current_time = explode(":",$current);
    $correct_time = explode(":",$correct);

    $time_diffInMin =   (intval($correct_time[0]) * 60 + $correct_time[1]) -
        (intval($current_time[0]) * 60 + $current_time[1]);


    foreach($steps as $step){
        while($time_diffInMin >= $step) {
            $time_diffInMin -= $step;
            $result++;
        }
    }

    return $result;
}

echo convertTime("02:30","04:35");