<?php
/**
 * CyclicRotation
 * Rotate an array to the right by a given number of steps.
 */

function solution($A, $K) {
    if (empty($A)) {
        return [];
    }
    $count = count($A);
    $left = array_slice($A, -($K % $count));
    $right = array_slice($A, 0, $count - count($left));
    return array_merge($left, $right);
}