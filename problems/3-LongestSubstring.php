<?php

function lengthOfLongestSubstring(string $s) {
   
    $n = strlen($s);
    $maxLength = 0;
    $charMap = [];
    $left = 0;

    for ($right = 0; $right < $n; $right++) {
        $currentChar = $s[$right];

        if (isset($charMap[$currentChar]) && $charMap[$currentChar] >= $left) {
            $left = $charMap[$currentChar] + 1;
        }

        $charMap[$currentChar] = $right;

        $maxLength = max($maxLength, $right - $left + 1);
    }

    return $maxLength;
}

var_dump(lengthOfLongestSubstring('pwwkew'));