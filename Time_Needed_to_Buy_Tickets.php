<?php

//    2073. Time Needed to Buy Tickets

function timeRequiredToBuy($tickets, $k) {

    $sec = 0;

    while($tickets[$k] > 0){
        foreach($tickets as $key => $ticket){
            if ($ticket > 0){
                $tickets[$key] = $ticket-1;
                $sec++;
            }
            if ($tickets[$k] == 0) break 2;
        }
    }
    return $sec;
}

echo timeRequiredToBuy([84,49,5,24,70,77,87,8],3);