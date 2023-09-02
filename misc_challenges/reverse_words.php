<?php

$string = 'a quick brown fox jumps over the lazy dog';

function reverseWords(string $string) {
    return implode(' ', array_reverse(explode(' ', $string)));
}

echo reverseWords($string);