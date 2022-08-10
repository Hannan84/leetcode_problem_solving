<?php

function containsDuplicate($nums) {

    $count_value = array_unique(array_count_values($nums));

    foreach ($count_value as $value){
        if ($value >= 2){
            return true;

        }
    }

}

echo containsDuplicate([2,1,5,4,6,3,2]);