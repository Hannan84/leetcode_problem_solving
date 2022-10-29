<?php

//    2264. Largest 3-Same-Digit Number in String


class Solution {

    const PTTERNS = [
        "999",
        "888",
        "777",
        "666",
        "555",
        "444",
        "333",
        "222",
        "111",
        "000"
    ];

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {

        foreach(self::PTTERNS as $pattern){

            if (str_contains($num,$pattern)) return $pattern;
        }
        return "";
    }
}

$obj = new Solution();
echo $obj->largestGoodInteger("6777133339");