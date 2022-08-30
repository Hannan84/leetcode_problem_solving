<?php

//    2194. Cells in a Range on an Excel Sheet

function cellsInRange($s) {

    $arr_s = explode(':',$s);

    $letterrange = range($arr_s[0][0],$arr_s[1][0]);

    $start_row = $arr_s[0][1];
    $end_row = $arr_s[1][1];

    foreach($letterrange as $letter){

        for ($i = $start_row; $i <= $end_row; $i++){

            $Exel_range[] = $letter.$i;
        }
    }

    return $Exel_range;
}

echo cellsInRange("K1:L2");