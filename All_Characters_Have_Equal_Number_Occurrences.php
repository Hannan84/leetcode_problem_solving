<?php

//    1941. Check if All Characters Have Equal Number of Occurrences


function areOccurrencesEqual($s) {

    $s_count = array_unique(array_count_values(str_split($s)));

    return count($s_count) == 1;
}

echo areOccurrencesEqual("abacbc");