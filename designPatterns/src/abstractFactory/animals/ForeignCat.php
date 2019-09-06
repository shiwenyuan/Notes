<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:00
 */

namespace DesignPatterns\AbstractFactory\Animals;


use DesignPatterns\AbstractFactory\Abstracts\Cat;

/**
 * Class ForeignCat
 * @package DesignPatterns\AbstractFactory\Animals
 */
class ForeignCat extends Cat
{
    /**
     * @return mixed|string
     */
    public function getCat()
    {
        return "美短";
    }
}