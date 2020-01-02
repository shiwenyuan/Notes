<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/9/12 13341007105@163.com
 * Time: 15:39
 */

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        $needle_len = strlen($needle);
        $haystack_len = strlen($haystack);
        for ($i = 0; $i <= $haystack_len - $needle_len; $i++) {
            $str = substr($haystack, $i, $needle_len);
            if ($str == $needle) {
                return $i;
            }
        }
        return -1;
    }
}
