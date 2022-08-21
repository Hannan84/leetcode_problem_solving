<?php

//        804. Unique Morse Code Words



function uniqueMorseRepresentations($words) {

    $code =  [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    $morse = [];
    foreach ($words as $w) {
        $s = '';
        foreach (str_split($w) as $ch) {
            $s.=$code[ord($ch)-97];
        }
        if (array_search($s,$morse)===false)
            $morse[] = $s;
    }
    return count($morse);
}

echo uniqueMorseRepresentations(["noilq","kzlq","ydreq","ybxk","kzlq"]);