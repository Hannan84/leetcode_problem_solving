<?php

//    2185. Counting Words With a Given Prefix


function prefixCount($words, $pref) {

    $len = strlen($pref);
    $count = 0;

    foreach($words as $value){

        if (strlen($value) >=  $len){
            $count += substr_count($value,$pref,0,$len);
        }


        /***    another method  ***/
        /***
        if (strpos($value,$pref) === 0){

            $count ++;
        }
         ***/
    }
    return $count;
}

echo prefixCount(["pay","attention","practice","attend"],"at");