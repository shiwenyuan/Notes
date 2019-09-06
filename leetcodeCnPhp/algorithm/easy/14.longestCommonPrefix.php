<?php 
/**
 * 编写一个函数来查找字符串数组中的最长公共前缀。
 * 如果不存在公共前缀，返回空字符串 ""。
 * 示例 1:
 *  输入: ["flower","flow","flight"]
 *  输出: "fl"
 * 示例 2:
 *  输入: ["dog","racecar","car"]
 *  输出: ""
 * 解释: 输入不存在公共前缀。
 * 说明:
 * 所有输入只包含小写字母 a-z 。
 */
class Solution {
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($array) {
        if (empty($array) || count($array) == 0){
            return '';
        } 
        $min_len = PHP_INT_MAX;
        #获取最短的数组
        foreach ($array as $arr) $minLen = min($min_len, strlen($arr));
        if ($minLen == 0) {
            return "";
        }
        $i = 0;
        $s = '';
        $prefix = ''; 
        while($i < $min_len) {
            $s .= $array[0][$i];
            if (strlen($s) != $i+1) {
                return $prefix;
            }
            foreach ($array as $key=>$arr) {
                $ss = substr($arr, 0, $i + 1);
                if ($ss != $s) {
                    return $prefix;
                }
            }
            $prefix = $s;
            $i++;
        }
    }
}
var_dump((new Solution())->longestCommonPrefix(["flower","flow","flight"]));
