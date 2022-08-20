<?php

//        2351. First Letter to Appear Twice


function repeatedCharacter($s) {

    $ans = [];

    for ($i = 0; $i < strlen($s); $i++) {

        if (isset($ans[$s[$i]])) {
            return $s[$i];
        }

        $ans[$s[$i]] = 1;
    }
}

echo repeatedCharacter('adfeiddfs');