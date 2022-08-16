<?php

//        268. Missing Number


function missingNumber($nums) {

    for ($i = 0; $i <= count($nums);$i++){

        $n = count($nums);

        $output = 0;
        for ($i = 0; $i <= $n; $i++) {
            $output ^= $i;
        }

        foreach ($nums as $num) {
            $output ^= $num;
        }

        return $output;
    }
}

echo missingNumber([3,0,1]);