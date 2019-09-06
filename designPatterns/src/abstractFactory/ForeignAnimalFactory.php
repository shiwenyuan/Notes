<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:09
 */
namespace DesignPatterns\AbstractFactory;

use DesignPatterns\AbstractFactory\Abstracts\AnimalsFactory;
use DesignPatterns\AbstractFactory\Abstracts\Cat;
use DesignPatterns\AbstractFactory\Abstracts\Dog;
use DesignPatterns\AbstractFactory\Animals\ForeignCat;
use DesignPatterns\AbstractFactory\Animals\ForeignDog;

/**
 * Class ForeignAnimalFactory
 * @package DesignPatterns\AbstractFactory
 */
class ForeignAnimalFactory extends AnimalsFactory
{

    /**
     * @return Dog
     */
    public function createDog():Dog
    {
        return new ForeignDog();
    }

    /**
     * @return Cat
     */
    public function createCat():Cat
    {
        return new ForeignCat();
    }
}