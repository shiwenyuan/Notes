<?php
/**
 * https://leetcode-cn.com/problems/roman-to-integer/submissions/
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 18:12
 */
class Solution {

    public $map = [
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000
    ];
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $s_array = str_split($s,1);
        $ret = 0;
        $count = count($s_array);

        for($i=0;$i<$count;$i++) {
            if (isset($s_array[$i+1])) {
                if ($s_array[$i+1]== 'V' && $s_array[$i] == 'I') {
                    $ret-=2;
                } else if ($s_array[$i+1]== 'X' && $s_array[$i] == 'I') {
                    $ret-=2;
                } else if ($s_array[$i+1]== 'L' && $s_array[$i] == 'X') {
                    $ret-=20;
                } else if ($s_array[$i+1]== 'C' && $s_array[$i] == 'X') {
                    $ret-=20;
                } else if ($s_array[$i+1]== 'D' && $s_array[$i] == 'C') {
                    $ret-=200;
                } else if ($s_array[$i+1]== 'M' && $s_array[$i] == 'C') {
                    $ret-=200;
                }
            }
            $ret += $this->map[$s_array[$i]];
        }
        return $ret;
    }
}
var_dump((new Solution())->romanToInt("MCMXCIV"));