<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/3/25 13341007105@163.com
 * Time: 18:22
 */

/**
 * https://leetcode-cn.com/problems/majority-element/
 * @param $nums
 * @return int|null|string
 */
function majorityElement($nums) {
    $datas = array_count_values($nums);
    arsort($datas);
    return key($datas);
}