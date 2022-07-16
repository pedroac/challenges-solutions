<?php
/**
 * OddOccurrencesInArray
 * Find value that occurs in odd number of elements. 
 */

function solution($A) {
    foreach (array_count_values($A) as $n => $count) {
        if ($count % 2 !== 0) {
            return $n;
        }
    }
}
