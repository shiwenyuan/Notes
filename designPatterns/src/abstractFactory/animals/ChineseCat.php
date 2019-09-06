<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:01
 */

namespace DesignPatterns\AbstractFactory\Animals;


use DesignPatterns\AbstractFactory\Abstracts\Cat;

/**
 * Class ChineseCat
 * @package DesignPatterns\AbstractFactory\Animals
 */
class ChineseCat extends Cat
{
    /**
     * @return mixed|string
     */
    public function getCat()
    {
        return "中华田园猫";
    }
}