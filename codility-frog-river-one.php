<?php
/**
 * FrogRiverOne
 * Find the earliest time when a frog can jump to the other side of a river. 
 */

function solution($X, $A) {
    $foundPositions = new SplFixedArray(max($A));
    $left = $X;
    foreach($A as $t => $N) {
        if (empty($foundPositions[$N-1])) {
            --$left;
            if ($left === 0) {
                return $t;
            }
            $foundPositions[$N-1] = true;
        }
    }
    return -1;
}
