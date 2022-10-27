<?php

//    1700. Number of Students Unable to Eat Lunch


function countStudents($students, $sandwiches) {

    $toEnd = 0;
    while (count($students) + 1 > $toEnd && count($students)) {
        $st = array_shift($students);
        if ($st == $sandwiches[0]) {
            array_shift($sandwiches);
            $toEnd = 0;
        } else {
            array_push($students,$st);
            $toEnd++;
        }
    }
    return count($students);
}

echo countStudents([1,1,0,0],[0,1,0,1]);