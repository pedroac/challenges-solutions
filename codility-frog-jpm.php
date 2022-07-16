<?php
/**
 * FrogJmp
 * Count minimal number of jumps from position X to Y. 
 */

function solution($X, $Y, $D) {
    return (int)ceil(($Y - $X) / $D);
}
