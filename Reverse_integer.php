<?php

function reverse($x) {

    $NbitIR = pow(-2,31);
    $bitIR = (pow(2,31) - 1);

    if (intval(strrev($x)) <= $NbitIR or $bitIR <= intval(strrev($x))){
        return 0;
    }
    elseif ($x < 0) {
        $x = $x * -1;
        return "-".intval(strrev($x));
    }
    return intval(strrev($x));
}

echo reverse(123);