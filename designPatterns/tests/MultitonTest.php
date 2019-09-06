<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/23 13341007105@163.com
 * Time: 17:01
 */
use \PHPUnit\Framework\TestCase;
use \DesignPatterns\Multiton\Multiton;

class MultitonTest extends TestCase
{
    public function testSignleton()
    {
        $db1 = Multiton::getInstance('db1');
        $db2 = Multiton::getInstance('db2');
        $_db1 = Multiton::getInstance('db1');
        $db3 = Multiton::getInstance('db3');
        $this->assertInstanceOf(Multiton::class, $db1);
        $this->assertInstanceOf(Multiton::class, $db2);
        $this->assertInstanceOf(Multiton::class, $_db1);
        $this->assertInstanceOf(Multiton::class, $db3);
        $this->assertSame($db1, $_db1);
        $this->assertNotSame($db1, $db2);
        $this->assertNotSame($db1, $db3);
        $this->assertNotSame($db2, $db3);
    }
}