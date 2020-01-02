<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/9/12 13341007105@163.com
 * Time: 15:47
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        if (!$nums) {
            return 0;
        }
        $dp = [];
        $dp[0]= $nums[0];
        $max = $nums[0];

        $nums_len = count($nums);
        for ($i = 1; $i<$nums_len; $i++) {
            $dp[$i] = $dp[$i - 1] < 0 ? $nums[$i] : $dp[$i -1] + $nums[$i];
            $max = max($max, $dp[$i]);
        }
        return $max;
    }
}
(new Solution())->maxSubArray([1,2]);
