<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:04
 */

namespace DesignPatterns\AbstractFactory\Animals;


use DesignPatterns\AbstractFactory\Abstracts\Dog;

/**
 * Class ChineseDog
 * @package DesignPatterns\AbstractFactory\Animals
 */
class ChineseDog extends Dog
{
    /**
     * @return mixed|string
     */
    public function getDog()
    {
        return "中华田园狗";
    }
}