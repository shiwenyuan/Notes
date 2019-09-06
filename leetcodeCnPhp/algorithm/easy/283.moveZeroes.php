<?php
/**
* https://leetcode-cn.com/problems/move-zeroes/
* @param Integer[] $nums
* @return NULL
*/
function moveZeroes(&$nums)
{
    $count = count($nums);
    for ($i=0; $i<$count; $i++) {
        if ($nums[$i] === 0) {
            unset($nums[$i]);
            array_push($nums, 0);
        }
    }
}

$nums = [0,1,0,3,12];
moveZeroes($nums);
var_dump($nums);
