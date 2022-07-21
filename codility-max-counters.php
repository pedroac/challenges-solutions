<?php
/**
 * MaxCounters
 * Calculate the values of counters after applying all alternating operations: increase counter by 1; set value of all counters to current maximum. 
 */

function solution($N, $A) {
    $counters = SplFixedArray::fromArray(array_fill(0, $N, 0), false);
    $max = 0;
    $maxCounter = 0;
    foreach ($A as $K => $X) {
        if ($X >= 1 && $X <= $N) {
            $n = $counters[$X-1] = max($maxCounter, $counters[$X-1]) + 1;
            $max = max($n, $max);
        } elseif ($X === $N + 1) {
            $maxCounter = $max;
        }
    }
    foreach ($counters as $k => $x) {
        $counters[$k] = max($maxCounter, $x);
    }
    return $counters->toArray();
}
