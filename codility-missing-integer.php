<?php
/**
 * MissingInteger
 * Find the smallest positive integer that does not occur in a given sequence.
 */

function solution($A) {
    $set = array_flip($A);
    for ($n = 1; ; ++$n) {
        if (!isset($set[$n])) {
            return $n;
        }
    }
}
