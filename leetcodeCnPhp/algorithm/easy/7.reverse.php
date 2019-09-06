<?php
/**
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 * 示例 1:
 *  输入: 123
 *  输出: 321
 * 示例 2:
 *  输入: -123
 *  输出: -321
 * 示例 3:
 *  输入: 120
 *  输出: 21
 * 注意:
 * 假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
 */
class Solution{
    public function reverse($num) {
       if(!is_int($num)){
           return 'error in type';
       }
       if ($num < 10 && $num > -10) {
           return $num;
       }
        if ($num< 0) {
            $type = 0;
            $num = -1 * $num;
        } else {
            $type = 1;
        }
        
        $remainder = 0;//余数
        $res = 0;
        while($num > 0){
           $remainder = $num%10; //获取余数
           $num = ($num-$remainder)/10;//初始化传进来的变量
           $res = $res*10+$remainder;
        }
        if ($res > 2147483647) {
            return 0;
        }
        return $type == 0 ? intval($res * -1): intval($res);
   }
}

 
 var_dump((new Solution())->reverse(-312));
