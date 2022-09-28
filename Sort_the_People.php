<?php

//    2418. Sort the People


function sortPeople($names, $heights) {

    $combine = array_combine($heights,$names);
    krsort($combine);
    return array_values($combine);
}

print_r(sortPeople(["Mary","John","Emma"],[180,165,170]));















