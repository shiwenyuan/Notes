<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 14:14
 */
use \PHPUnit\Framework\TestCase;
use \DesignPatterns\AbstractFactory\Abstracts\AnimalsFactory;
use \DesignPatterns\AbstractFactory\ChineseAnimalFactory;
use \DesignPatterns\AbstractFactory\ForeignAnimalFactory;
class AbstractFactory extends TestCase
{
    public function testFactory()
    {
        $chinese_animal = new ChineseAnimalFactory();
        $this->assertInstanceOf(AnimalsFactory::class, $chinese_animal);
        $foreign_factory = new ForeignAnimalFactory();
        $this->assertInstanceOf(AnimalsFactory::class, $foreign_factory);
    }

    public function testAnimalFactory()
    {
        $chinese_animal = new ChineseAnimalFactory();
        $this->assertEquals('中华田园猫',$chinese_animal->createCat()->getCat());
        $this->assertEquals('中华田园狗',$chinese_animal->createDog()->getDog());
        $foreign_factory = new ForeignAnimalFactory();
        $this->assertEquals('美短',$foreign_factory->createCat()->getCat());
        $this->assertEquals('斗牛犬',$foreign_factory->createDog()->getDog());
    }
}