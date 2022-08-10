<?php
function detectCapitalUse($word) {

    if(strtolower($word) === $word){
        return true;
    } elseif (strtoupper($word) === $word){
        return true;
    } elseif (ucfirst(strtolower($word)) === $word){
        return true;
    } else {
        return false;
    }

}

   echo detectCapitalUse('Google');