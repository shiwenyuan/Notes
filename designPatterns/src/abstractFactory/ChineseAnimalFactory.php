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
use DesignPatterns\AbstractFactory\Animals\ChineseCat;
use DesignPatterns\AbstractFactory\Animals\ChineseDog;

/**
 * Class ChineseAnimalFactory
 * @package DesignPatterns\AbstractFactory
 */
class ChineseAnimalFactory extends AnimalsFactory
{
    /**
     * @return Dog
     */
    public function createDog(): Dog
    {
        return new ChineseDog();
    }

    /**
     * @return Cat
     */
    public function createCat(): Cat
    {
        return new ChineseCat();
    }
}
