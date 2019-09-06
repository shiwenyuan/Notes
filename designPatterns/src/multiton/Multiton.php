<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/23 13341007105@163.com
 * Time: 16:57
 */
namespace DesignPatterns\Multiton;

class Multiton
{
    /**
     * @var Multiton
     */
    private static $instance = [];

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）
     * @param $instance_name
     * @return Multiton
     */
    public static function getInstance($instance_name): Multiton
    {
        if (!isset(static::$instance[$instance_name])) {
            static::$instance[$instance_name] = new static($instance_name);
        }
        return static::$instance[$instance_name];
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     * Multiton constructor.
     * @param $instance_name
     */
    private function __construct($instance_name)
    {
        /*
         * if ($instance_name) {
         * }
         * */
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }
}
