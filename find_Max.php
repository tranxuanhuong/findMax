<?php

$arr = [
    [1, 2, 3, 4, 5, 6],
    [15, 6, 7, 8, 9, 1]
];
function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }

    echo $max;
}

findMax($arr);
