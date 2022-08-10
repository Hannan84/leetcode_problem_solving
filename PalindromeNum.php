<?php


function isPalindrome($x) {
    return intval(strrev($x)) === $x? true:false;
}

echo isPalindrome(-101);
echo "<br>";
echo  isPalindrome(-121);