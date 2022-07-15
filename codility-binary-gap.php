<?php
/**
 * BinaryGap
 * Find longest sequence of zeros in binary representation of an integer. 
 */

function solution($N) {
    preg_match_all('/(?!1)(0+)(?=1)/', decbin($N), $matches);
    return empty($matches[0])
        ? 0
        : max(
            array_map(
                function($s) { return strlen($s); },
                $matches[0]
            )
        );
}
