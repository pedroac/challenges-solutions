<?php
/**
 * PermMissingElem
 * Find the missing element in a given permutation. 
 */

function solution($A) {
    $flipped = array_flip($A);
    $count = count($A);
    for ($n = 1; $n <= $count; ++$n) {
        if (!isset($flipped[$n])) {
            return $n;
        }
    }
    return $count + 1;
}
