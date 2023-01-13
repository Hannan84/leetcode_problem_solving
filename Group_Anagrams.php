<?php

//    49. Group Anagrams

function groupAnagrams($strs) {
    $output = [];
    foreach($strs as $str){
        $s = str_split($str);
        sort($s);
        $sortString = implode($s);
        $output[$sortString][] = $str;
    }
    return $output;
}

groupAnagrams(["eat","tea","tan","ate","nat","bat"]);