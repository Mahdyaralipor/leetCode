<?php
function mergeAlternately(string $word1, string $word2): string {
    $merge =  '';
    $lenght_word = strlen($word1); 
    $lenght_word2 = strlen($word2);
    $maxLength = max($lenght_word, $lenght_word2);

    for ($i = 0; $i < $maxLength; $i++) {
        if($i < $lenght_word)
            $merge .= $word1[$i];

        if($i < $lenght_word2)
            $merge .= $word2[$i];
    }

    return $merge;
}

echo mergeAlternately('abc', 'efgkl');


