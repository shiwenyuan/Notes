<?php
/**
 * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
 * 你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
 * 示例:
 *  给定 nums = [2, 7, 11, 15], target = 9
 *  因为 nums[0] + nums[1] = 2 + 7 = 9
 *  所以返回 [0, 1]
 */
class Solution
{
    public function twoSum($nums, $target)
    {
        foreach ($nums as $key => $num) {
            $data = $target - $num;
            if (in_array($data, $nums)) {
                $first_key = array_search(intval($data), $nums);
                if ($first_key != $key) {
                    return [$key,$first_key];
                }
            }
        }
    }
}
var_dump((new Solution())->twoSum([2,4,5,6,8,9], 9));
