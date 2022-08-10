<?php

//        942. DI String Match
//
//        A permutation perm of n + 1 integers of all the integers in the range [0, n] can be represented as a string s of length n where:
//
//        s[i] == 'I' if perm[i] < perm[i + 1], and
//        s[i] == 'D' if perm[i] > perm[i + 1].
//
//        Given a string s, reconstruct the permutation perm and return it. If there are multiple valid permutations perm, return any of them.
//
//
//
//        Example 1:
//        Input: s = "IDID"
//        Output: [0,4,1,3,2]
//
//
//        Example 2:
//        Input: s = "III"
//        Output: [0,1,2,3]
//
//
//        Example 3:
//        Input: s = "DDI"
//        Output: [3,2,0,1]


//    solution of the problem


function diStringMatch($s) {

    $n = 0;
    $m = strlen($s);
    $res = [];

    for($i = 0; $i <= strlen($s); $i++)
    {
        if($s[$i] == 'I')
        {
            $res[$i] = $n;
            $n++;
        }
        else{

            $res[$i] = $m;
            $m--;

        }
    }
    return $res;
}

print json_encode(diStringMatch('IDID'));