<?php

//    2129. Capitalize the Title


function capitalizeTitle($title) {

    $words = str_word_count($title,1);

    $res = [];

    foreach($words as $word){
        $word = strtolower($word);

        if (strlen($word) > 2){
            $res[] = ucfirst($word);
        }else{
            $res[] = $word;
        }
    }

    return implode(' ',$res);
}

echo capitalizeTitle("capiTalIze tHe titLe");