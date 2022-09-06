<?php

//    806. Number of Lines To Write String


function numberOfLines($widths, $s) {

    $s_split = str_split($s);
    $array_string = array_combine(range('a','z'),$widths);

    $pixels = 0;
    $lines = 1;

    foreach($s_split as $item){

        if ($pixels + $array_string[$item] > 100){
            $lines++;
            $pixels = 0;
        }
        $pixels += $array_string[$item];
    }

    return [$lines,$pixels];
}

echo numberOfLines([4,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10],"bbbcccdddaaa");