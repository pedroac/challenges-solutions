<?php
/**
 * TapeEquilibrium
 * Minimize the value |(A[0] + ... + A[P-1]) - (A[P] + ... + A[N-1])|. 
 */

function solution($A) {
    $firstPartSum = 0;
    $secondPartSum = array_sum($A);
    $lastIndex = count($A) - 2;
    $min = PHP_INT_MAX;
    for ($i = 0; $i <= $lastIndex; ++$i) {
        $n = $A[$i];
        $firstPartSum += $n;
        $secondPartSum -= $n;
        $diff = abs($firstPartSum - $secondPartSum);
        if ($diff < $min) {
            $min = $diff;
        }
    }
    return $min;
}