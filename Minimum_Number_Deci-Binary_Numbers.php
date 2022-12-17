<?php

//    1689. Partitioning Into Minimum Number Of Deci-Binary Numbers


function minPartitions($n) {

    $res = 0;

    for ($i = 0; $i < strlen($n); $i++){
        if ($n[$i] > $res){
            $res = $n[$i];
        }
    }
    return $res;
}

echo minPartitions("32");