<?php
/**
 * https://leetcode-cn.com/problems/plus-one/submissions/
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 18:18
 */


function plusOne($digits)
{
    return intval(implode('', $digits)) + 1;
}

var_dump(plusOne([1, 2, 3]));