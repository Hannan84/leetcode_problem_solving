<?php

//    1694. Reformat Phone Number

function reformatNumber($number) {

    $result = '';

    $number = preg_replace('/\W/','',$number);
    $numberCount = strlen($number);

    while ($numberCount > 4) {
        $numberCount -= 3;

        $result .= substr($number, 0, 3) . '-';
        $number = substr($number, 3);
    }

    $lust = ($numberCount == 2 || $numberCount == 3) ? $number : substr($number, 0, 2) . '-' . substr($number, 2, 2);

    return $result . $lust;
}

echo reformatNumber("1-23-45 6");