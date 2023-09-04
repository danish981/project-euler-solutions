<?php

// the prime factors of 13195 are 5, 7, 13 and 29
// what is the largest prime factor of the number 600851475143

echo nextPrime(13);

function nextPrime($prime) {
    $nextPrime = $prime + 1;
    while (!isPrime($nextPrime)) {
        $nextPrime++;
    }
    return $nextPrime;
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
