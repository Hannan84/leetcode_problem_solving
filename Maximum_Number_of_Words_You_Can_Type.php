<?php

//    1935. Maximum Number of Words You Can Type

function canBeTypedWords($text, $brokenLetters) {

    $text = explode(' ',$text);
    $count = 0;
    if ($brokenLetters == ""){
        return count($text);
    }
    foreach($text as $word){

        preg_match("/[$brokenLetters]/i",$word,$matches);

        if (count($matches) == 0){
            $count++;
        }
    }

    return $count;
}

echo canBeTypedWords("hello world","ad");