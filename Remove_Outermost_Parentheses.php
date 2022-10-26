<?php

//    1021. Remove Outermost Parentheses


function removeOuterParentheses($s) {

    $stack = [];
    $resul = '';

    for($i=0; $i<strlen($s) ;$i++){
        switch($s[$i]){
            case '(' :
                array_push($stack,'(');
                if(count($stack) > 1) $resul.='(';
                break;

            case ')' :
                array_pop($stack);
                if(count($stack) >= 1) $resul.=')';
                break;
        }
    }
    return $resul;
}

echo removeOuterParentheses("(()())(())");