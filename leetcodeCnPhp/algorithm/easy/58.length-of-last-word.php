<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 11:00
 */
function lengthOfLastWord($s) {
    $s = trim($s);
    if ($s == '') {
        return 0;
    }
    $s_array = explode(' ',$s);
    return strlen($s_array[count($s_array)-1]);
}

var_dump(lengthOfLastWord("Hello World"));