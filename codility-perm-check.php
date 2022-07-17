<?php
/**
 * PermCheck
 * Check whether array A is a permutation. 
 */

function solution($A) {
    sort($A, SORT_NUMERIC);
    foreach($A as $k => $n) {
        if ($n !== $k + 1) {
            return 0;
        }
    }
    return 1;
}