<?php

//    2283. Check if Number Has Equal Digit Count and Digit Value


function digitCount($num) {

    $num_parts = str_split($num);
    $num_counts = array_count_values($num_parts);

    foreach ($num_parts as $digit => $freq) {
        if ($num_counts[$digit] == intval($freq)) {
            continue;
        }
        return false;
    }
    return true;

}

echo digitCount('1210');