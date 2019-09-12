<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/9/11 13341007105@163.com
 * Time: 17:33
 */

class Utils
{
    /**
     * 把array或json以array字符串的形式输出 等同于var_export
     * @param $str
     * @return string
     */
    public static function outputArray($str): string
    {
        if (is_string($str)) {
            $arr = json_decode($str, true);
            if (is_null($arr)) {
                $ret_str = '';
                if (is_numeric($str)) {
                    $ret_str .= '[' .PHP_EOL. $str .PHP_EOL. ']';
                } else {
                    $ret_str .= '[' .PHP_EOL. '\''.$str .'\''.PHP_EOL. ']';
                }
                return $ret_str;
            }
        } else {
            $arr = $str;
        }
        $str = '[' . PHP_EOL;
        foreach ($arr as $key => $value) {
            if (!is_numeric($key)) {
                $str .= "'{$key}' => ";
            }
            if (is_array($value)) {
                $str .= self::outputArray($value);
            } else {
                if (is_string($value)) {
                    $str .= "'{$value}'," . PHP_EOL;
                } else {
                    $str .= "{$value}," . PHP_EOL;
                }
            }
        }
        $str .= '],' . PHP_EOL;
        return $str;
    }
}
echo Utils::outputArray('shiwenyuan');
/*
 * output: [
 * 'shiwenyuan'
 * ]
 * */
echo Utils::outputArray(['name'=>'zhangsan', 'age'=>18, 'friend'=>[['name'=>'lisi', 'age'=>19], ['name'=>'wangwu', 'age'=>20]]]);
/**
 * [
 *'name' => 'zhangsan',
 * 'age' => 18,
 * 'friend' => [
 * [
 * 'name' => 'lisi',
 * 'age' => 19,
 * ],
 * [
 * 'name' => 'wangwu',
 * 'age' => 20,
 * ],
 * ],
 * ]
 */
echo Utils::outputArray('{"name":"zhangsan","age":18,"friend":[{"name":"lisi","age":19},{"name":"wangwu","age":21}]}');
/**
 * [
 *'name' => 'zhangsan',
 * 'age' => 18,
 * 'friend' => [
 * [
 * 'name' => 'lisi',
 * 'age' => 19,
 * ],
 * [
 * 'name' => 'wangwu',
 * 'age' => 20,
 * ],
 * ],
 * ]
 */
