<?php

//    657. Robot Return to Origin


function judgeCircle($moves) {

    $split = str_split($moves);

    $count = array_count_values($split);

    if ($count['U'] == $count['D'] && $count['R'] == $count['L']) return true;
    return false;

}

echo judgeCircle("UD");