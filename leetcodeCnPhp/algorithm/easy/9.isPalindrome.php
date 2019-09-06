<?php
/**
 * https://leetcode-cn.com/problems/palindrome-number/submissions/
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/25 13341007105@163.com
 * Time: 16:32
 */
function isPalindrome($x)
{
    if ($x < 0) {
        return false;
    }
    if ($x == 0) {
        return true;
    }
    $x = strval($x);
    $len = strlen($x) - 1;
    if ($x[$len] == 0) {
        return false;
    }
    for ($i = 0; $i <= $len; $i++) {
        if ($x[$i] != $x[$len - $i]) {
            return false;
        }
    }
    return true;
}

var_dump(isPalindrome(102));