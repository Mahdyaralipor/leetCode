<?php
function isPalindrome(int $x): bool {
    if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
        return false;
    }
    
    $reversed = 0;
    while ($x > $reversed) {
        $reversed = $reversed * 10 + $x % 10;
        $x = intdiv($x, 10);
    }
    
    return $x == $reversed || $x == intdiv($reversed, 10);
}

echo isPalindrome(121) ? 'true' : 'false';
echo "\n";
echo isPalindrome(-121) ? 'true' : 'false';
echo "\n";
echo isPalindrome(10) ? 'true' : 'false';
