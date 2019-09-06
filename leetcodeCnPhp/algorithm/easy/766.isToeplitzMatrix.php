<?php

/**
 * https://leetcode-cn.com/problems/toeplitz-matrix/submissions/
 * @param $matrix
 * @return bool
 */
function isToeplitzMatrix($matrix) {
    foreach ($matrix as $key => $mat) {
        foreach ($mat as $k => $item) {
            if (isset($matrix[$key+1][$k+1]) && $mat[$k] != $matrix[$key+1][$k+1]) {
                return false;
            }
        }
    }
    return true;
}

$matrix = [[1,2],[2,2]];
var_dump(isToeplitzMatrix($matrix));