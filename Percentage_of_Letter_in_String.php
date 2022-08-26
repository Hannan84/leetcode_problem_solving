<?php

//    2278. Percentage of Letter in String


function percentageLetter($s, $letter) {


    if (substr_count($s,$letter) == 0){
        return 0;
    }

    return floor(substr_count($s,$letter) * 100 / strlen($s));
}

echo percentageLetter('foobar','o');