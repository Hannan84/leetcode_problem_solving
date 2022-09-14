<?php

//    463. Island Perimeter

function islandPerimeter($grid) {
    $perimeter = 0;
    for ($i = 0; $i < count($grid); $i++) {
        for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$i][$j] == 0) {
                continue;
            }

            // left
            if (! isset($grid[$i][$j - 1]) || $grid[$i][$j - 1] == 0) {
                $perimeter++;
            }

            // right
            if (! isset($grid[$i][$j + 1]) || $grid[$i][$j + 1] == 0) {
                $perimeter++;
            }

            // up
            if (! isset($grid[$i - 1][$j]) || $grid[$i - 1][$j] == 0) {
                $perimeter++;
            }

            // down
            if (! isset($grid[$i + 1][$j]) || $grid[$i + 1][$j] == 0) {
                $perimeter++;
            }
        }
    }

    return $perimeter;
}

echo islandPerimeter([[0,1,0,0],[1,1,1,0],[0,1,0,0],[1,1,0,0]]);