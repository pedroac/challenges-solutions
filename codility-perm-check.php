<?php
/**
 * PermCheck
 * Check whether array A is a permutation. 
 */

function solution($A) {
    sort($A);
    foreach($A as $k => $n) {
        if ($n !== $k + 1) {
            return 0;
        }
    }
    return 1;
}