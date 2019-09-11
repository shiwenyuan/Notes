<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/9/9 13341007105@163.com
 * Time: 10:46
 */

class Search
{

    /**
     * 线性搜索的平均时间复杂度或最坏时间复杂度是O(n)，这不会随着待搜索数组的顺序改变而改变。
     * 所以如果数组中的项按特定顺序排序，我们不必进行线性搜索。我们可以通过执行选择性搜索而可以获得更好的结果。
     * 二分查找
     * @param $arr
     * @param $needle
     * @return bool
     */
    public static function binarySearch($arr, $needle)
    {
        $low = 0;
        $count = count($arr) - 1;
        while ($low <= $count) {
            $middle = (int)(($count + $low) / 2);
            if ($arr[$middle] < $needle) {
                $low = $middle + 1;
            } elseif ($arr[$middle] > $needle) {
                $count = $middle - 1;
            } else {
                return true;
            }
        }
        return false;
    }
}
