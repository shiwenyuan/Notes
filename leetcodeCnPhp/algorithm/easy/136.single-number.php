<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/3/25 13341007105@163.com
 * Time: 18:16
 */

/**
 * https://leetcode-cn.com/problems/single-number/
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber($nums)
{
    $result = 0;
    foreach ($nums as $num) {
        $result ^= $num;
    }
    return $result;
}
