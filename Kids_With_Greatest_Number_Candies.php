<?php

//    1431. Kids With the Greatest Number of Candies


function kidsWithCandies($candies, $extraCandies) {

    $max = max($candies);

    foreach($candies as $key => $candie){
        if ($max <= ($candie + $extraCandies)){
            $candies[$key] = true;
        }
        else{
            $candies[$key] = false;
        }
    }
    return $candies;

}

kidsWithCandies([2,3,5,1,3],3);