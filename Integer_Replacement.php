<?php

function integerReplacement($n) {

        if ($n == 1){
           return 0;
        }
        elseif($n%2 == 0){
            return 1 + integerReplacement($n/2);
        }
        elseif ($n%2 == 1){
            $ops1 = integerReplacement($n+1);
            $ops2 = integerReplacement($n-1);


            return 1 + min($ops1,$ops2);
        }

}

echo integerReplacement(12);