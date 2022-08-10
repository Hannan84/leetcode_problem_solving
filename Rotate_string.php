<?php

//        796. Rotate String
//
//        Given two strings s and goal, return true if and only if s can become goal after some number of shifts on s.
//
//        A shift on s consists of moving the leftmost character of s to the rightmost position.
//
//        For example, if s = "abcde", then it will be "bcdea" after one shift.
//
//
//        Example 1:
//        Input: s = "abcde", goal = "cdeab"
//        Output: true
//
//        Example 2:
//        Input: s = "abcde", goal = "abced"
//        Output: false


//        Solution

function rotateString($s, $goal) {


    if(strlen($s) == strlen($goal)){

        $s_arr = str_split($s);
        $goal_arr = str_split($goal);

        for($i = 0; $i < count($s_arr); $i++){

            $s_arr[] = array_shift($s_arr);

            if($s_arr == $goal_arr){
                return true;
            }
        }
    }

    elseif($s == $goal){

        return true;
    }
    return false;

}

echo rotateString('abcde','cdeab');