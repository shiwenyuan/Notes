<?php
/**
 * https://leetcode-cn.com/problems/climbing-stairs
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 18:39
 */

function climbStairs($n) {
    if ($n == 2) {
        return $n;
    } else if ($n == 1) {
        return $n;
    } else {
        $res = 0;
        $i = 1;
        $j =2;
        $k = 3;
        while($k<=$n){
            $res = $i+$j;
            $i = $j;
            $j = $res;
            $k++;
        }
        return $res;
    }
}