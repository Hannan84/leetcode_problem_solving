<?php

//    832. Flipping an Image


function flipAndInvertImage($image) {

    $result = [];

    foreach($image as $img){

        $arr_rev = array_reverse($img);

        foreach($arr_rev as $key => $value){

            $arr_rev[$key] =  $value === 1? 0 : 1;
        }

        $result[] = $arr_rev;
    }

    return $result;
}

print_r(flipAndInvertImage([[1,1,0],[1,0,1],[0,0,0]]));