<?php

/**
 * https://leetcode-cn.com/problems/remove-element/submissions/
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val)
{
    $count = count($nums);
    for ($i=0; $i<$count; $i++) {
        if ($nums[$i] === $val) {
            unset($nums[$i]);
        }
    }
}
$nums = [1,2,2,3];
removeElement($nums, 2);
var_dump($nums);
