<?php

//function fib($n) {
//    if ($n==0){
//        return 0;
//    }
//    elseif($n==1){
//        return 1;
//    }
//    else{
//        return fib($n-1) + fib($n-2);
//    }
//
//}
$memo = array();
function fibonacciMemo($n) {
    global $memo;
    if(array_key_exists($n, $memo)) {
        return $memo[$n];
    }
    else {
        if($n > 1) {
            $memo[$n] = fibonacciMemo($n-1) + fibonacciMemo($n-2);
            return $memo[$n];
        }
        return $n;
    }
}
echo fibonacciMemo(3);