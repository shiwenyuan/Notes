<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/12/31 13341007105@163.com
 * Time: 15:37
 */
/*
 * Class Solution
 */
class Solution
{
    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        // krsort($s);
        $len = count($s);
        for ($i=0; $i < $len/2; $i++) {
            $tmp = $s[$i] ;
            $s[$i] =  $s[$len-$i-1];
            $s[$len-$i-1] = $tmp;
        }
    }
}
$s = ["h","e","l","l","o"];
(new Solution())->reverseString($s);
var_export($s);
