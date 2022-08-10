<?php

function compress($chars) {

//    With extra space
//    $list = [];
//
//    $lenth = count($chars);
//
//    array_push($list,$chars[0]);
//    $count = 1;
//
//    for($i = 1; $i < $lenth; $i++){
//        if ($chars[$i] == $chars[$i-1]){
//            $count += 1;
//            continue;
//        }
//        if ($count > 1){
//            array_push($list,strval($count));
//            }
//        $count = 1;
//        array_push($list,$chars[$i]);
//    }
//
//    if($count > 1){
//        array_push($list,strval($count));
//        }
//
//    return $list;


//    Without Extra space
    $lenth = count($chars);

    $j = 0;
    $count = 1;

    for($i = 1; $i < $lenth; $i++){
        if ($chars[$i] == $chars[$i-1]){
            $count += 1;
            continue;
        }
        if ($count > 1){
            $count_str = strval($count);
            $count_len = strlen($count_str);
            for($k = 0; $k < $count_len; $k++){

                $j += 1;
                $chars[$j] = $count_str[$k];
            }
        }
        $count = 1;
        $j += 1;
        $chars[$j] = $chars[$i];
    }

    if($count > 1){
        $count_str = strval($count);
        $count_len = strlen($count_str);
        for($k = 0; $k < $count_len; $k++){

            $j += 1;
            $chars[$j] = $count_str[$k];
        }
    }

    return $j+1;

}

echo compress(["a","a","b","b","c","c","c"]);