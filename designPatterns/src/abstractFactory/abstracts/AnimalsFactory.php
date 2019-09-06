<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 12:40
 */
namespace DesignPatterns\AbstractFactory\Abstracts;
/**
 * Class AnimalsFactory
 * @package DesignPatterns\AbstractFactory\Abstracts
 */
abstract class AnimalsFactory
{
    /**
     * @return Dog
     */
    abstract public function createDog():Dog;

    /**
     * @return Cat
     */
    abstract public function createCat():Cat;
}