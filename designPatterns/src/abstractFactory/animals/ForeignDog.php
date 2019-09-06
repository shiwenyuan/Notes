<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:03
 */

namespace DesignPatterns\AbstractFactory\Animals;


use DesignPatterns\AbstractFactory\Abstracts\Dog;

/**
 * Class ForeignDog
 * @package DesignPatterns\AbstractFactory\Animals
 */
class ForeignDog extends Dog
{
    /**
     * @return mixed|string
     */
    public function getDog()
    {
        return "斗牛犬";
    }
}