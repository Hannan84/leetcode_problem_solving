<?php

//    500. Keyboard Row


function findWords($words) {

    $keyboard = [
        'first_row' => 'qwertyuiop',
        'second_row' => 'asdfghjkl',
        'third_row' => 'zxcvbnm',
    ];

    $out = [];
    foreach ($keyboard as $row) {
        foreach ($words as $word) {
            preg_match("/[{$row}]+/i", $word, $matches);
            if ($matches[0] == $word){
                $out[] = $word;
            }

        }
    }

    return $out;
}

print_r(findWords(["Hello","Alaska","Dad","Peace"]));