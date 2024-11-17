<?php

    function longestPalindrome(string $s): string {

        $n = strlen($s);
        if ($n < 2) return $s;
        
        $start = 0;
        $maxLength = 1;
    
        $expandAroundCenter = function($s, $left, $right) {
            $n = strlen($s);
            while ($left >= 0 && $right < $n && $s[$left] === $s[$right]) {
                $left--;
                $right++;
            }
            return $right - $left - 1;
        };
    
        for ($i = 0; $i < $n; $i++) {
            $len1 = $expandAroundCenter($s, $i, $i);
            $len2 = $expandAroundCenter($s, $i, $i + 1);
    
            $len = max($len1, $len2);
    
            if ($len > $maxLength) {
                $maxLength = $len;
                $start = $i - (int)(($len - 1) / 2);
            }
        }
    
        return substr($s, $start, $maxLength);
    }

    $s1 = "babad";
    $s2 = "cbbd";

    echo longestPalindrome($s1) . PHP_EOL;
    echo longestPalindrome($s2) . PHP_EOL;
