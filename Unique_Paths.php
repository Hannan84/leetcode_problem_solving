<?php

//function uniquePaths($m, $n) {
//
//    if ($m == 1 || $n == 1){
//        return 1;
//    }else{
//        return uniquePaths($m-1,$n) + uniquePaths($m,$n-1);
//    }
//}


function uniquePaths($m, $n) {

    $count = array();

    for ($i = 0; $i < $m; $i++)
        $count[$i][0] = 1;

    for ($j = 0; $j < $n; $j++)
        $count[0][$j] = 1;

    for ($i = 1; $i < $m; $i++)
    {
        for ($j = 1; $j < $n; $j++)

            $count[$i][$j] = $count[$i - 1][$j] +
                $count[$i][$j - 1];
    }
    return $count[$m - 1][$n - 1];
}

echo uniquePaths(3,2);