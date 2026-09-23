<?php

// Sort array in ascending order without using sort()

$arr = [100, 101, 32, 45, 65];

function sortArr(array $arr): array
{
    $count = count($arr);

    for ($i = 0; $i < $count - 1; $i++) {

        for ($j = 0; $j < $count - $i - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                // Swap values
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

print_r(sortArr($arr));
