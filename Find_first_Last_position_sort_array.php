<?php

function First($nums, $target){
    $low = 0;
    $high = count($nums)-1;
    $res = -1;
    while($low <= $high){
        $mid = ceil(($low + $high)/2);
        if ($nums[$mid] > $target){
            $high = $mid - 1;
        }
        elseif ($nums[$mid] < $target){
            $low = $mid + 1;
        }
        else{
            $res = $mid;
            $high = $mid - 1;
        }
    } return $res;
}

function Last($nums, $target) {
    $low = 0;
    $high = count($nums)-1;
    $res = -1;
    while($low <= $high){
        $mid = ceil(($low + $high)/2);
        if ($nums[$mid] > $target){
            $high = $mid - 1;
        }
        elseif ($nums[$mid] < $target){
            $low = $mid + 1;
        }
        else{
            $res = $mid;
            $low = $mid + 1;
        }
    } return $res;
}

$i = First([5,7,7,8,8,10],8);
$j = Last([5,7,7,8,8,10],8);
print_r([$i,$j]);







//function searchRange($nums, $target) {
//
//
//    $first = -1; $last = -1;
//    for ( $i = 0; $i < count($nums); $i++)
//    {
//        if ($target != $nums[$i])
//            continue;
//        if ($first == -1)
//            $first = $i;
//        $last = $i;
//    }
//    if ($first != -1)
//        return "[$first,$last]";
//    else
//        return "[-1,-1]";
//}
//
//echo searchRange([5,7,7,8,8,10], 8);