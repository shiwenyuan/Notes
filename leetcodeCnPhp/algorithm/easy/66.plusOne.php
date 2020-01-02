<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/9/12 13341007105@163.com
 * Time: 17:16
 */
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        if (!$digits) {
            return 0;
        }
        $count = count($digits);
        $num_str = '';
        for ($i = 0; $i < $count; $i++) {
            $num_str .=$digits[$i];
        }
        $num_str = strval(bcadd($num_str, 1));

        $num_str_count = strlen($num_str);
        $ret = [];
        for ($i = 0; $i < $num_str_count; $i++) {
            $ret[] =$num_str[$i];
        }
        return $ret;
    }
}
var_dump((new Solution())->plusOne([9,7,9,9]));