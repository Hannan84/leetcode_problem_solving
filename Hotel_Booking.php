<?php
/**
 * @input $a -> array of integers
 * @input $b -> array of integers
 * @input $c -> integer
 */
// return an integer //

function hotel($a, $b, $c){
    //WRITE YOUR CODE HERE
    sort($a);
    sort($b);

    $n = count($a);

    $count = 0;
    $i = 0;
    $j = 0;
    while ($i < $n and $j < $n){
        if  ($a[$i] < $b[$j]){
            $count += 1;
            $i++;

        }
        elseif  ($b[$j < $a[$i]]){
            $count -= 1;
            $j++;

        }
        else{
            $i++;
            $j++;

        }
        if ($count > $c) {
            return 'false';
        }
    }
    return 'true';
}

echo hotel([1,2,5],[2,6,8],1);
echo hotel([1, 2, 3, 4],[10, 2, 6, 14],4);