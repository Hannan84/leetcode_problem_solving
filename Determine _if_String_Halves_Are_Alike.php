<?php


//    1704. Determine if String Halves Are Alike

function halvesAreAlike($s) {

    $length = strlen($s);
    $half = $length / 2;
    $sumA = $sumB = 0;
    for ($i = 0; $i < $length; $i++) {
        if (in_array($s[$i], ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
            if ($i < $half) {
                $sumA += 1;
            } else {
                $sumB += 1;
            }
        }
    }

    return $sumA === $sumB;
}

echo halvesAreAlike("book");