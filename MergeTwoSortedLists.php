<?php

function mergeTwoLists($list1, $list2) {
//    $arr = [];
//    foreach ($list1 as $value){
//        $arr[] = $value;
//    }
//    foreach ($list2 as $item) {
//        $arr[] = $item;
//    }
    $arr = array_merge($list1,$list2);
    sort($arr);
    return $arr;
}

print json_encode(mergeTwoLists([1,3,4],[1,2,4]));
echo '<br>';
print json_encode(mergeTwoLists([],[0]));
echo '<br>';
print json_encode(mergeTwoLists([],[]));