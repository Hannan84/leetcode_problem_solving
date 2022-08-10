<?php

function firstUniqChar($s) {

    foreach (array_count_values(str_split($s)) as $key => $item) {
        if ($item == 1) return array_search($key, str_split($s));
    }
    return -1;
}

echo firstUniqChar('aabb');