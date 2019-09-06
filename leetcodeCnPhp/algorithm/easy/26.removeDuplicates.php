<?php
/**
 * https://leetcode-cn.com/problems/remove-duplicates-from-sorted-array/
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums)
{
    $tmp = [];
    $count = count($nums);
    for ($i=0; $i<$count; $i++) {
        if (in_array($nums[$i], $tmp)) {
            continue;
        } else {
            $tmp[] = $nums[$i];
        }
    }
    $nums = $tmp;
}
$nums = [2,1,3,4,1,5,6,6,2,7];
removeDuplicates($nums);
var_dump($nums);
