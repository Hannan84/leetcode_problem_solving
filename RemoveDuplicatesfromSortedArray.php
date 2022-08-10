<?php

function removeDuplicates(&$nums) {
    if (count($nums) == 0) return 0;
    $i = 0;
    for ($j = 1; $j < count($nums); $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }
    return $i + 1;
}
$nums = [0,0,1,1,1,2,2,3,3,4];
print json_encode(removeDuplicates($nums));