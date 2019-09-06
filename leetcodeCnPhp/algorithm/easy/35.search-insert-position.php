<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 10:49
 */
/**
 * https://leetcode-cn.com/problems/search-insert-position/submissions/
 * @param $nums
 * @param $target
 * @return false|int|string
 */
function searchInsert($nums, $target)
{
    $key = array_search($target, $nums);
    if (empty($key) && $key !== 0) {
        $count = count($nums) -1;
        if ($nums[0] > $target) {
            return 0;
        }
        if ($nums[$count] < $target) {
            return $count+1;
        }
        for ($i=0; $i<$count; $i++) {
            if ($nums[$i] < $target && $nums[$i+1] > $target) {
                $key = $i+1;
                break;
            }
        }
    }

    return $key;
}

var_dump(searchInsert([1, 3, 5, 6], 7));