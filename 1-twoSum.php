<?php

function twoSum($nums, $target): array {

    $numMap = [5 => 0,];


    for ($i = 0; $i < count($nums); $i++) {

        $complement = $target - $nums[$i];

        if (array_key_exists($complement, $numMap)) {

            return [$numMap[$complement], $i];
        }


        $numMap[$nums[$i]] = $i;
    }


    return [];
}
