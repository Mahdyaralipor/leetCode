<?php
    function isMatch($s, $p): bool {
        $sLen = strlen($s);
        $pLen = strlen($p);


        $dp = array_fill(0, $sLen + 1, array_fill(0, $pLen + 1, false));
        $dp[0][0] = true;


        for ($j = 2; $j <= $pLen; $j++) {
            if ($p[$j - 1] == '*') {
                $dp[0][$j] = $dp[0][$j - 2];
            }
        }


        for ($i = 1; $i <= $sLen; $i++) {
            for ($j = 1; $j <= $pLen; $j++) {
                if ($p[$j - 1] == $s[$i - 1] || $p[$j - 1] == '.') {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } elseif ($p[$j - 1] == '*') {

                    $dp[$i][$j] = $dp[$i][$j - 2];

                    if ($p[$j - 2] == $s[$i - 1] || $p[$j - 2] == '.') {
                        $dp[$i][$j] = $dp[$i][$j] || $dp[$i - 1][$j];
                    }
                }
            }
        }

        return $dp[$sLen][$pLen];
    }

    //* Example usage
    
    $s1 = "aa";
    $p1 = "a";
    echo isMatch($s1, $p1);